<?php

use Illuminate\Database\Seeder;
use App\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'event_title'=>'Welcome Program',
            'event_description'=>"Let's do some fun Juniors",
            'hosted_by'=>'Oxford University',
            'starting_date'=>'2022-09-10',
            'end_date'=>'2022-11-11',
            'location'=>'Kathmandu'
        ]);
    }
}
