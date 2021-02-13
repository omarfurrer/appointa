<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        Permission::create(['name' => 'categoires.view']);
        Permission::create(['name' => 'categoires.create']);
        Permission::create(['name' => 'categoires.edit']);
        Permission::create(['name' => 'categoires.delete']);
    }
}
