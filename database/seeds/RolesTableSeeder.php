<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'doctor']);
        Role::create(['name' => 'patient']);
        // $permissions = Permission::get();
        // $permission_ids = $permissions->pluck('id')->toArray();
        // $role->permissions()->attach($permission_ids);
    }
}
