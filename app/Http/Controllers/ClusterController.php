<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Cluster;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Cluster::query();

        if ($search = $request->search) {
            $query->where("name", "like", "%{$search}%");
        }

        $clusters = $query->latest()->paginate(10)->withQueryString();

        return Inertia::render("clusters/index", [
            "clusters" => $clusters,
            "search" => $request->search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("clusters/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            "name" => "required",
        ]);

        Cluster::create($validate_data);

        return redirect()->route("clusters.index")->with("success", "Cluster created successfully.");
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
        $cluster = Cluster::findOrFail($id);

        return Inertia::render("clusters/edit", [
            'cluster' => $cluster
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cluster = Cluster::findOrFail($id);

        $rules = [
            "name" => "required",
        ];

        $validate_data = $request->validate($rules);

        $cluster->update($validate_data);

        return redirect()->route("clusters.index")->with("success", "Cluster updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cluster = Cluster::find($id);

        if ($cluster) {
            $cluster->delete();
            return redirect()->route('clusters.index')->with('success', 'Cluster deleted successfully.');
        }
    }
}
