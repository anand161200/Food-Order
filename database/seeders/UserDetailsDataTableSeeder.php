<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserDetailsDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $admin_role = Role::create([
            'slug' => 'admin',
            'name' => 'admin'
        ]);

        $user_role = Role::create([
            'slug' => 'user',
            'name' => 'user'
        ]);

        User::truncate();

        $admin = User::create([
            'user_name' => 'Anand',
            'first_name' => 'Anand',
            'last_name' => 'Tank',
            'email' => 'anandtank@gmail.com',
            'date_of_birth' => '2000-01-16',
            'city' => 'Ahmedabad',
            'state' => 'Gujarat',
            'address' => 'Titanium city center mall',
            'contact_number' => '8200186326',
            'Zip_code' => '380001',
            'password' => bcrypt('anand@123'),
        ]);

        $admin->assignRole($admin_role->name);

        $user = User::create([
            'user_name' => 'user',
            'first_name' => 'user',
            'last_name' => 'user',
            'email' => 'user@gmail.com',
            'date_of_birth' => '2000-05-16',
            'city' => 'Ahmedabad',
            'state' => 'Gujarat',
            'address' => 'Titanium city center mall',
            'contact_number' => '8200186327',
            'Zip_code' => '380001',
            'password' => bcrypt('user@123'),
        ]);

        $user->assignRole($user_role->name);
    }
}
