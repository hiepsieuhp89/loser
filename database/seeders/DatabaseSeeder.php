<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statistic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Statistic::insert([
            'visits_count'=>0,
            'docs_count'=>0,
            'generating_number_count'=>0,
            'messages_sent_count'=>0
        ]);
    }
}
