<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'admin'],
            ['name' => 'company'],
        ];

        foreach ($data as $item) {
            Role::findOrCreate($item['name']);
        }

        $data = [
            ['name' => 'index-employees'],
            ['name' => 'index-enterprises'],
            ['name' => 'create-enterprises'],
            ['name' => 'store-enterprises'],
            ['name' => 'show-enterprises'],
            ['name' => 'update-enterprises'],
            ['name' => 'edit-enterprises'],
            ['name' => 'delete-enterprises'],
            ['name' => 'destroy-enterprises'],
        ];

        foreach ($data as $item) {
            Permission::findOrCreate($item['name']);
        }

        $adminRole = Role::where('name', 'admin')->first();

        $adminRole->syncPermissions(Permission::all());
    }
}
