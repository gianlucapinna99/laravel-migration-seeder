<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('trains')->truncate();

        for ($i = 0; $i < 100; $i++) {

            $table = new Train();

            $table->company = $faker->company();
            $table->departure_station = $faker->city();
            $table->arrival_station = $faker->city();
            $table->departure_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $table->arrival_time = Carbon::parse($table->departure_time)->addHours(rand(1, 5));
            $table->train_code = $faker->bothify('11###');
            $table->vagons = $faker->randomDigit();
            $table->on_time = $faker->boolean();
            $table->cancelled = $faker->boolean();



            $table->save();
        }
    }
}


//             $table->string('company', 50);
//             $table->string('departure_station', 100);
//             $table->string('arrival_station', 100);
//             $table->dateTime('departure_time');
//             $table->dateTime('arrival_time');
//             $table->string('train_code', 25);
//             $table->tinyInteger('vagons')->default(1);
//             $table->boolean('on_time')->default(true);
//             $table->boolean('cancelled')->default(false);