<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Wisata;
use App\Models\Cluster;
use Illuminate\Http\Request;
use App\Models\IterasiCluster;
use Illuminate\Support\Facades\Auth;

class KmeansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clusters = Cluster::latest()->get();

        $clustering_data = IterasiCluster::with(['wisata', 'cluster'])
            ->where('user_id', Auth::user()->id)
            ->latest()
            ->get();
        return Inertia::render('kmeans/index', [
            'clusters' => $clusters,
            'clustering_data' => $clustering_data,
        ]);
    }

    public function euclidean_distance($wisata, $centroid)
    {
        $result = [
            'wisata_id' => $wisata->id,
        ];

        // temporary data hasil perkalian centroid
        $temp_data = [];

        foreach ($centroid as $index => $ce) {
            // perkalian dengan setiap centroid
            $temp_data['jarak_c' . ($index + 1)] = round(
                sqrt(
                    ($wisata->rating - $ce['rating']) ** 2 +
                        ($wisata->ulasan - $ce['ulasan']) ** 2 +
                        ($wisata->jumlah_fasilitas - $ce['jumlah_fasilitas']) ** 2
                ),
                2
            );
        }

        // mencari nilai minimal
        $minimal = min($temp_data);

        foreach ($temp_data as $index => $value) {
            $result[$index] = $value;
            if ($minimal == $value) {
                $cluster_number = (int)str_replace('jarak_c', '', $index);
                $result['cluster_id'] = $cluster_number;
            }
        }

        return $result;
    }

    public function iterasi($list_wisata, $centroid)
    {
        $result = [];

        foreach ($list_wisata as $wisata) {
            // menghitung jarak setiap data dengan centroid
            $perhitungan = $this->euclidean_distance($wisata, $centroid);

            array_push($result, $perhitungan);
        }

        $new_centroid = [
            0 => [
                'rating' => 0,
                'ulasan' => 0,
                'jumlah_fasilitas' => 0,
                'count' => 0, // jumlah data di cluster 1
            ],
            1 => [
                'rating' => 0,
                'ulasan' => 0,
                'jumlah_fasilitas' => 0,
                'count' => 0, // jumlah data di cluster 2
            ],
            2 => [
                'rating' => 0,
                'ulasan' => 0,
                'jumlah_fasilitas' => 0,
                'count' => 0, // jumlah data di cluster 3
            ],
        ];

        $wisataList = Wisata::all()->keyBy('id');

        // Loop semua hasil perhitungan jarak
        foreach ($result as $value) {
            $wisata = $wisataList[$value['wisata_id']];

            $clusterIndex = $value['cluster_id'] - 1;

            // Tambahkan nilai ke total clusterIndex terkait
            $new_centroid[$clusterIndex]['rating'] += $wisata->rating;
            $new_centroid[$clusterIndex]['ulasan'] += $wisata->ulasan;
            $new_centroid[$clusterIndex]['jumlah_fasilitas'] += $wisata->jumlah_fasilitas;
            $new_centroid[$clusterIndex]['count']++;
        }

        // Hitung rata-rata (centroid baru)
        foreach ($new_centroid as $key => $val) {
            $count = max($val['count'], 1); // Hindari pembagian dengan 0

            $new_centroid[$key]['rating'] = round($val['rating'] / $count, 2);
            $new_centroid[$key]['ulasan'] = round($val['ulasan'] / $count, 2);
            $new_centroid[$key]['jumlah_fasilitas'] = round($val['jumlah_fasilitas'] / $count, 2);

            // Hapus 'count' agar hasil lebih bersih
            // unset($new_centroid[$key]['count']);
        }

        return [$result, $new_centroid];
    }

    private function isSameCentroid(array $old, array $new): bool
    {
        foreach ($old as $index => $centroid) {
            foreach (['rating', 'ulasan', 'jumlah_fasilitas'] as $key) {
                // Jika selisih lebih dari 0.0001 dianggap belum konvergen
                if (abs($centroid[$key] - $new[$index][$key]) > 0.0001) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  Mengambil semua data wisata
        $list_wisata = Wisata::latest()->get();

        //  Mengambil Centroid awal
        // $centroid_awal = $list_wisata->random(3)->toArray(); // random centroid
        $centroid_awal = Wisata::whereIn('id', [3, 11, 19])->get()->toArray(); // example centroid di excel

        // K means Iterasi
        $latest_centroid = $centroid_awal;
        $iterasi_status = true;
        $iterasi_ke = 1;
        while ($iterasi_status) {
            [$iterasi, $centroid] = $this->iterasi($list_wisata, $latest_centroid);

            if ($this->isSameCentroid($latest_centroid, $centroid)) {
                $iterasi_status = false;

                $insertData = [];

                $userId = Auth::user()->id;

                foreach ($iterasi as $data) {
                    $insertData[] = [
                        "user_id" => $userId,
                        "wisata_id" => $data['wisata_id'],
                        "cluster_id" => $data['cluster_id'],
                        "jarak_c1" => $data['jarak_c1'],
                        "jarak_c2" => $data['jarak_c2'],
                        "jarak_c3" => $data['jarak_c3'],
                        "jumlah_iterasi" => $iterasi_ke,
                        "created_at" => now(),
                        "updated_at" => now(),
                    ];
                }

                IterasiCluster::insert($insertData);

                return back()->with('success', 'Pengelompokkan berdasarkan cluster berhasil!');
            } else {
                $latest_centroid = $centroid;
                $iterasi_ke++;
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $user = Auth::user();
        IterasiCluster::where('user_id', $user->id)->delete();

        return back()->with('success', 'Clustering telah direset');
    }
}