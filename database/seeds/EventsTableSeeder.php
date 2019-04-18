<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'Rendez-vous avec le patient a', 'user_id' => '1',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient b', 'user_id' => '2',  'color' => '#004C8C', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient c', 'user_id' => '3',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient d', 'user_id' => '4',  'color' => '#3B0002', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient e', 'user_id' => '5',  'color' => '#004058', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient f', 'user_id' => '9',  'color' => '#5B712C', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient g', 'user_id' => '2',  'color' => '#056BB3', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient h', 'user_id' => '2',  'color' => '#C60030', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient i', 'user_id' => '3',  'color' => '#66ACAE', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient j', 'user_id' => '3',  'color' => '#DADBDD', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient k', 'user_id' => '8',  'color' => '#EE6A8C', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient l', 'user_id' => '8',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient m', 'user_id' => '5',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient n', 'user_id' => '2',  'color' => '#5B712C', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient o', 'user_id' => '5',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient p', 'user_id' => '6',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient q', 'user_id' => '7',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient r', 'user_id' => '7',  'color' => '#18450B', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient s', 'user_id' => '7',  'color' => '#630929', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
            ['title'=>'Rendez-vous avec le patient t', 'user_id' => '7',  'color' => '#F40D42', 'start_date'=>'2019-09-11', 'end_date'=>'2019-09-12'],
        ];
        foreach ($data as $key => $value) {

            Event::create($value);
        }
    }
}
