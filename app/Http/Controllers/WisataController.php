<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Wisata::query();

        if ($search = $request->search) {
            $query->where("nama_wisata", "like", "%{$search}%");
        }

        $wisatas = $query->latest()->paginate(10)->withQueryString();

        return Inertia::render("wisatas/index", [
            "wisatas" => $wisatas,
            "search" => $request->search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("wisatas/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            "nama_wisata" => "required",
            "rating" => "required|numeric",
            "jumlah_pengunjung" => "required|numeric",
            "jumlah_fasilitas" => "required|numeric",
        ]);

        Wisata::create($validate_data);

        return redirect()->route("wisatas.index")->with("success", "Wisata created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisata = Wisata::findOrFail($id);

        return Inertia::render("wisatas/edit", [
            'wisata' => $wisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wisata = Wisata::findOrFail($id);

        $rules = [
            "nama_wisata" => "required",
            "rating" => "required|numeric",
            "jumlah_pengunjung" => "required|numeric",
            "jumlah_fasilitas" => "required|numeric",
        ];

        $validate_data = $request->validate($rules);

        $wisata->update($validate_data);

        return redirect()->route("wisatas.index")->with("success", "Wisata updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wisata = Wisata::find($id);

        if ($wisata) {
            $wisata->delete();
            return redirect()->route('wisatas.index')->with('success', 'Wisata deleted successfully.');
        }
    }
}
