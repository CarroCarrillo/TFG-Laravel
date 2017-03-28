<?php

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
        DB::table('users')->insertGetId([
          'username' => 'admin',
          'password' => bcrypt('admin'),
          'email' => 'admin@eshare.es',
          'name' => 'Admin',
          'surname' => 'TFG'
        ]);
    }
}
