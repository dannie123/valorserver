<?php
 
class SettingsTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('settings')->delete();
 
        Settings::create(array(
            'color1' => '#609646',
            'color2' => '#4B8DCF',
            'color3' => null,
            'welcome_logo' => null,
            'app_header' => null,
            'menu_header' => null
        ));

    }
 
}