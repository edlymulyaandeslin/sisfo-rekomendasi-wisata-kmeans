<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IterasiCluster extends Model
{
    protected $guarded = [];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
    public function cluster()
    {
        return $this->belongsTo(Cluster::class);
    }
}