<?php

use Illuminate\Database\Seeder;
use App\Aboutus;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aboutus::create([
            'title'=>'About Our Company',
            'description'=>' Our Company is a creatively driven integrated Business Consulting ,Advertising agency and IT company located in Narayangarh that creates high-impact business solutions for both traditional and digital media to its clients.'
        ]);
    }
}
