<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            ['name' => 'Super Admin'],
            ['name' => 'Teacher'],
            ['name' => 'Staff'],
            ['name' => 'Admin'],
            ['name' => 'Student'],
            ['name' => 'Parent'],
            ['name' => 'Owner'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // config/permission.php
        foreach (config('permission.list') as $permission) {
            foreach ($permission['access'] as $access) {
                Permission::create(['name' => $access]);
            }
        }

        // super admin
        Role::find(1)->givePermissionTo(Permission::all());
    }
}
