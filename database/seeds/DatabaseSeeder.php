<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(WebsiteSettingsTableSeeder::class);
    }
}

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
            'name' => 'User Admin',
            'email' => 'admin@zwcms.com',
            'password' => Hash::make( 'zwcms' ),
        ]);
    }
}

class WebsiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('website_settings')->insert([
            'website_name' => 'zwcms',
            'website_account_email' => 'zwcms@mail.com',
            'website_legal_name' => 'zwcms',
            'website_desc' => 'zwcms',
        ]);
    }
}