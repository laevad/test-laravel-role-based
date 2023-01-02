<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleTypes = [
            'admin',
            'user',
        ];

        foreach ($roleTypes as $roleType) {
            \App\Models\RoleType::create([
                'name' => $roleType,
            ]);
        }
    }
}
