<?php
 
class DashboardTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('dashboard')->delete();
 
        Dashboard::create(array(
            'all_swipes' => '50',
            'right_swipes' => '20',
            'matches' => '3',
            'conversations' => '1'
        ));

    }
 
}