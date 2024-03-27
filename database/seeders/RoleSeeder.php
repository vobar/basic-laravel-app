<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()
            ->insert([
                ['id' => 1, 'name' => 'admin', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 2, 'name' => 'manager', 'guard_name' => 'web', 'created_at' => Carbon::now()]
            ]);
    }
}
