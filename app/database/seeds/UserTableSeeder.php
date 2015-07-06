<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'admin_id' => 'firstadmin@school.edu',
            'password' => Hash::make('123456')
        ));
 
        User::create(array(
            'admin_id' => 'secondadmin@school.edu',
            'password' => Hash::make('123456')
        ));
    }
 
}