<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Question;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $laravel = Category::where('name', 'Laravel')->first();
        $php = Category::where('name', 'PHP')->first();
        $boostrap=Category::where('name','Boostrap')->first();

        Question::create(['name' => 'What is Laravel primarily used for?', 'category_id' => $laravel->id]);
        Question::create(['name' => 'Which of the following is a Laravel feature that simplifies database queries?', 'category_id' => $laravel->id]);
        Question::create(['name' => 'In Laravel, what command is used to create a new controller?','category_id' =>$laravel->id]);

        Question::create(['name' => 'Which of the following is a way to declare a variable in PHP?','category_id' =>$php->id]);
        Question::create(['name' => 'Which function in PHP is used to include the content of one PHP file into another PHP file?','category_id' =>$php->id]);
        Question::create(['name' => 'What is the default file extension for PHP files?','category_id' =>$php->id]);

        Question::create(['name' => 'What is Bootstrap primarily used for?','category_id' =>$boostrap->id]);
        Question::create(['name' => 'Which class in Bootstrap is used to create a responsive grid system?','category_id' =>$boostrap->id]);
        Question::create(['name' => 'Which Bootstrap component is used to create a navigation bar?','category_id' =>$boostrap->id]);
    }
}
