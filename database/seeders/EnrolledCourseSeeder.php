<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EnrolledCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        
        $userid = [2,3,7,7,8,8,9,9,9,10];
        $courseid = [7,6,2,4,2,5,2,3,9,7];
        $datas = [];
        for ($i=0; $i < 10; $i++) { 
            $temp = [
                // 'user_id'=>$faker->numberBetween(2,10),
                // 'course_id'=>$faker->numberBetween(1,10)
                'user_id'=>$userid[$i],
                'course_id'=>$courseid[$i]
            ];
            array_push($datas, $temp);
        }

        DB::table('enrolled_courses')->insert($datas);
    }
}
