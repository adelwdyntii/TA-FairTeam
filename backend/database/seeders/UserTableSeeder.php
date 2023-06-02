<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->username = 'admin';
        $admin->is_admin = true;
        $admin->role = 'admin';
        $admin->save();

        $operator = new User;
        $operator->name = "operator";
        $operator->email = 'operator@gmail.com';
        $operator->password = bcrypt('12345678');
        $operator->username = 'operator';
        $operator->is_admin = true;
        $operator->role = 'operator';
        $operator->save();
    }
}
