<?php

namespace Database\Seeders;
use App\Models\Question;
use App\Models\Option;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $q1 = Question::where('name', 'What is Laravel primarily used for?')->first();
        $q2 = Question::where('name', 'Which of the following is a Laravel feature that simplifies database queries?')->first();

        Option::create(['answer' => 'Building mobile applications', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Creating desktop software', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Developing web applications', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Designing graphic interfaces', 'question_id' => $q1->id]);

        Option::create(['answer' => 'Eloquent ORM', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Blade templating', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Middleware', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Artisan', 'question_id' => $q2->id]);

    }
}
