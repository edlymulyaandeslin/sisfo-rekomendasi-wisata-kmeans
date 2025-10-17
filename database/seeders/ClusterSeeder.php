<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cluster;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_cluster = [
            'Populer dan Ramai',
            'Potensial',
            'Kurang Diminati'
        ];

        foreach ($list_cluster as $cluster) {
            Cluster::create([
                'name' => $cluster
            ]);
        }
    }
}
