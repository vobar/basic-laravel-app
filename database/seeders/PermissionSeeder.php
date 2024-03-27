<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::query()
            ->insert([
                ['id' => 1, 'name' => 'browse_users', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 2, 'name' => 'create_users', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 3, 'name' => 'update_users', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 4, 'name' => 'delete_users', 'guard_name' => 'web', 'created_at' => Carbon::now()],

                ['id' => 5, 'name' => 'browse_roles', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 6, 'name' => 'create_roles', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 7, 'name' => 'update_roles', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 8, 'name' => 'delete_roles', 'guard_name' => 'web', 'created_at' => Carbon::now()],

                ['id' => 9, 'name' => 'browse_permissions', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 10, 'name' => 'create_permissions', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 11, 'name' => 'update_permissions', 'guard_name' => 'web', 'created_at' => Carbon::now()],
                ['id' => 12, 'name' => 'delete_permissions', 'guard_name' => 'web', 'created_at' => Carbon::now()],

                ['id' => 13, 'name' => 'browse_admin_area', 'guard_name' => 'web', 'created_at' => Carbon::now()],
            ]);
    }
}
