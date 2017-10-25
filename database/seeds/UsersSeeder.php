<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
$adminRole = new Role();
$adminRole->name = "admin";
$adminRole->display_name = "Admin";
$adminRole->save();
// Membuat role member
$mahasiswaRole = new Role();
$mahasiswaRole->name = "member";
$mahasiswaRole->display_name = "Member";
$mahasiswaRole->save();
// Membuat sample admin
$admin = new User();
$admin->name = 'Admin sisfo';
$admin->email = 'admin@gmail.com';
$admin->password = bcrypt('rahasia');
$admin->save();
$admin->attachRole($adminRole);
// Membuat sample member
$mahasiswa = new User();
$mahasiswa->name = "Sample Member";
$mahasiswa->email = 'member@gmail.com';
$mahasiswa->password = bcrypt('rahasia');
$mahasiswa->save();
$mahasiswa->attachRole($mahasiswaRole);
    }
}
