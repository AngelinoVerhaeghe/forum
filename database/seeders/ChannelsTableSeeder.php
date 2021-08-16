<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert(['name' => 'Laravel 8', 'slug' => 'laravel-8', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('channels')->insert(['name' => 'Vue', 'slug' => 'vue', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('channels')->insert(['name' => 'React', 'slug' => 'react', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('channels')->insert(['name' => 'Angular', 'slug' => 'angular', 'created_at' => now(), 'updated_at' => now()]);
    }
}
