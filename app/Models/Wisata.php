<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Wisata extends Model implements ToCollection
{
    /** @use HasFactory<\Database\Factories\WisataFactory> */
    use HasFactory;

    protected $guarded = [];

    public function collection(Collection $rows)
    {
        $rows = $rows->skip(1);

        foreach ($rows as $index => $row) {
            // if ($index === 0) {
            //     continue;
            // }
            Wisata::create([
                'location' => $row[1],
                'nama_wisata' => $row[2],
                'rating' => (float) str_replace(",", ".", $row[3]),
                'jumlah_pengunjung' => $row[4],
                'jumlah_fasilitas' => $row[5],
            ]);
        }
    }
}
