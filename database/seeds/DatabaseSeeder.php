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
        $this->call(TemplateTypeTableSeeder::class);
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
            'name' => 'Diana Pampols',
            'email' => 'info@justforyou.pt',
            'password' => Hash::make('jfypt'),
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
            'website_name' => 'Just For you',
            'website_account_email' => 'info@justforyou.pt',
            'website_legal_name' => 'Just For You',
            'website_desc' => 'Just For You',
        ]);
    }
}

class TemplateTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('template_types')->insert(
            [
                ['template_name' => 'institucional'],['template_name' => 'produtos'],['template_name' => 'blog'],['template_name' => 'contactos']
            ]
        );
    }
}