<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tickets')->insert([
        //     'id_code'=> Str::random(10),
        //     'starting_date'=> Date(1),
        //     'closing_date' => Date(1),
        //     'description'=> Str::random(10)
        // ]);
        \App\Models\Ticket::factory()->count(10)->create();
       
    }
}
