<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'role_id'   => '1',
          'name'      => 'Admin',
          'username'  => 'admin',
          'email'     => 'admin@gmail.com',
          'password'  => bcrypt('rootadmin'),
        ]);

    DB::table('users')->insert([
          'role_id'   => '2',
          'name'      => 'Landlord',
          'username'  => 'landlord',
          'email'     => 'landlord@gmail.com',
          'password'  => bcrypt('rootlandlord'),
        ]);

        DB::table('users')->insert([
          'role_id'   => '3',
          'name'      => 'Renter',
          'username'  => 'renter',
          'email'     => 'renter@gmail.com',
          'password'  => bcrypt('rootrenter'),
        ]);


    }
}
