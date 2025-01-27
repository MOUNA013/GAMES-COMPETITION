<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competition')->insert([
            'game_id' => 1, 
            'title' => 'Championship 2025',
            'start_date' => Carbon::now()->addDays(2), 
            'end_date' => Carbon::now()->addDays(5), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
