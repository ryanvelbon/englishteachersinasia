<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function run(): void
    {
        $packages = [
            [
                'title' => 'Starter',
                'n_hours' => 1,
                'discount' => 0
            ],
            [
                'title' => 'Basic',
                'n_hours' => 5,
                'discount' => 10
            ],
            [
                'title' => 'Plus',
                'n_hours' => 10,
                'discount' => 15
            ],
            [
                'title' => 'Premium',
                'n_hours' => 25,
                'discount' => 20
            ],
            [
                'title' => 'Ultimate',
                'n_hours' => 50,
                'discount' => 25
            ],
        ];

        Package::insert($packages);
    }
}
