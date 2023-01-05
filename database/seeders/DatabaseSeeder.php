<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name' => 'Create',
                'slug' => 'create'
            ],
            [
                'name' => 'Delete',
                'slug' => 'delete'
            ],
            [
                'name' => 'Read',
                'slug' => 'read'
            ]
        ]);

        Role::insert([
            [
                'name' => 'Admin', //create, read, delete
                'slug' => 'admin'
            ],
            [
                'name' => 'Manager', //read, delete
                'slug' => 'manager'
            ],
            [
                'name' => 'Guest', //read only
                'slug' => 'guest'
            ]
        ]);

        DB::table('permission_role')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'permission_id' => 3,
                'role_id' => 1,
            ]
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role_id' => 1,
        ]);
        User::factory()->count(9)->create();

        Post::factory()->count(20)->create();
    }
}
