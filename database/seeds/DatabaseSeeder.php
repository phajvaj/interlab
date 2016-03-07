<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bunjong Kittisawangwong',
            'username' => 'admin',
            'email' => 'saciw.doi@gmail.com',
            'password' => bcrypt('admin080'),
            'tel' => '0801321434',
            'role' => '1',
            'active' => 'Y',
        ]);
         $this->call(RolesTableSeeder::class);
    }
}
