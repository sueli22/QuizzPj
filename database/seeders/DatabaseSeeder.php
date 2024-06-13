<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Option;
use App\Models\Question;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'NaingWinKo',
            'email' => 'nwk4@gmail.com',
            'password'=>bcrypt('wyine'),
            'role'=>'admin'
        ]);

        User::factory()->create([
            'name' => 'wyinemayzin',
            'email' => 'wyinemayzin44194419@gmail.com',
            'password'=>bcrypt('naing'),
            'role'=>'user'
        ]);
        User::factory()->create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password'=>bcrypt('naing'),
            'role'=>'user'
        ]);
        User::factory()->create([
            'name' => 'KyawKyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password'=>bcrypt('naing'),
            'role'=>'user'
        ]);
        User::factory()->create([
            'name' => 'HlaHla',
            'email' => 'hla@gmail.com',
            'password'=>bcrypt('naing'),
            'role'=>'user'
        ]);

       $c1=  Category::create(['name' => 'Laravel']);
       $c2= Category::create(['name' => 'PHP']);
       $c3=Category::create(['name' => 'Boostrap']);

      $q1=   Question::create(['name' => 'Laravel ကို ဘာအတွက် အဓိကသုံးတာလဲ?', 'category_id' => $c1->id]);
      $q2= Question::create(['name' => 'အောက်ဖော်ပြပါအရာများထဲမှ မည်သည့်အရာသည် ဒေတာဘေ့စ်မေးမြန်းချက်များကို ရိုးရှင်းလွယ်ကူစေသည့် Laravel အင်္ဂါရပ်တစ်ခုဖြစ်သနည်း', 'category_id' => $c1->id]);
      $q3=  Question::create(['name' => 'Laravel တွင် controller အသစ်တစ်ခုဖန်တီးရန် မည်သည့် command ကိုအသုံးပြုသနည်?','category_id' =>$c1->id]);

      $q4=  Question::create(['name' => 'အောက်ပါတို့ထဲမှ မည်သည့်နည်းသည် PHP တွင် variable တစ်ခုကိုကြေငြာရန်နည်းလမ်းဖြစ်သနည်း?','category_id' =>$c2->id]);
      $q5=  Question::create(['name' => 'Which function in PHP is used to include the content of one PHP file into another PHP file?','category_id' =>$c2->id]);
      $q6=  Question::create(['name' => 'PHP ဖိုင်များအတွက် မူရင်းဖိုင် extension ကဘာလဲ?','category_id' =>$c2->id]);

      $q7=   Question::create(['name' => 'Bootstrap က ဘာအတွက် အဓိကသုံးတာလဲ။','category_id' =>$c3->id]);
      $q8=  Question::create(['name' => 'Which class in Bootstrap is used to create a responsive grid system?','category_id' =>$c3->id]);
      $q9=  Question::create(['name' => 'NavBarတစ်ခုဖန်တီးရန် မည်သည့် Bootstrap အစိတ်အပိုင်းကို အသုံးပြုသနည်း။','category_id' =>$c3->id]);


      Option::create(['answer' => 'Building mobile applications','points'=>'0', 'question_id' => $q1->id]);
      Option::create(['answer' => 'Creating desktop software','points'=>'1', 'question_id' => $q1->id]);
      Option::create(['answer' => 'Developing web applications','points'=>'0', 'question_id' => $q1->id]);
      Option::create(['answer' => 'Designing graphic interfaces','points'=>'0', 'question_id' => $q1->id]);

      Option::create(['answer' => 'Eloquent ORM', 'points'=>'0','question_id' => $q2->id]);
      Option::create(['answer' => 'Blade templating','points'=>'0', 'question_id' => $q2->id]);
      Option::create(['answer' => 'Middleware','points'=>'1', 'question_id' => $q2->id]);
      Option::create(['answer' => 'Artisan', 'points'=>'0','question_id' => $q2->id]);

      Option::create(['answer' => ' php artisan make','points'=>'0', 'question_id' => $q3->id]);
      Option::create(['answer' => 'php new','points'=>'0', 'question_id' => $q3->id]);
      Option::create(['answer' => ' artisan create','points'=>'0', 'question_id' => $q3->id]);
      Option::create(['answer' => ' composer create-controller','points'=>'1', 'question_id' => $q3->id]);

      Option::create(['answer' => ' var $variable_name;','points'=>'1', 'question_id' => $q4->id]);
      Option::create(['answer' => '$variable_name;','points'=>'0', 'question_id' => $q4->id]);
      Option::create(['answer' => ' variable $variable_name;','points'=>'0', 'question_id' => $q4->id]);
      Option::create(['answer' => ' declare $variable_name;','points'=>'0', 'question_id' => $q4->id]);

      Option::create(['answer' => 'require()','points'=>'0', 'question_id' => $q5->id]);
      Option::create(['answer' => ' import();','points'=>'0', 'question_id' => $q5->id]);
      Option::create(['answer' => ' include();','points'=>'1', 'question_id' => $q5->id]);
      Option::create(['answer' => 'load();','points'=>'0', 'question_id' => $q5->id]);

      Option::create(['answer' => '.html','points'=>'0', 'question_id' => $q5->id]);
      Option::create(['answer' => '.php','points'=>'1', 'question_id' => $q5->id]);
      Option::create(['answer' => ' .js','points'=>'0', 'question_id' => $q5->id]);
      Option::create(['answer' => '.css;','points'=>'0', 'question_id' => $q5->id]);

      Option::create(['answer' => '.html','points'=>'0', 'question_id' => $q6->id]);
      Option::create(['answer' => '.php','points'=>'0', 'question_id' => $q6->id]);
      Option::create(['answer' => ' .js','points'=>'1', 'question_id' => $q6->id]);
      Option::create(['answer' => '.css;','points'=>'0', 'question_id' => $q6->id]);

      Option::create(['answer' => ' Developing mobile applications','points'=>'0', 'question_id' => $q7->id]);
      Option::create(['answer' => ' Managing databases','points'=>'0', 'question_id' => $q7->id]);
      Option::create(['answer' => 'Creating responsive web designs','points'=>'1', 'question_id' => $q7->id]);
      Option::create(['answer' => 'Writing server-side scripts','points'=>'0', 'question_id' => $q7->id]);

      Option::create(['answer' => 'grid-responsive','points'=>'0', 'question_id' => $q8->id]);
      Option::create(['answer' => 'container-grid','points'=>'0', 'question_id' => $q8->id]);
      Option::create(['answer' => 'row','points'=>'1', 'question_id' => $q8->id]);
      Option::create(['answer' => 'grid-system','points'=>'0', 'question_id' => $q8->id]);

      Option::create(['answer' => 'navbar','points'=>'1', 'question_id' => $q9->id]);
      Option::create(['answer' => 'nav','points'=>'0', 'question_id' => $q9->id]);
      Option::create(['answer' => 'navigation','points'=>'0', 'question_id' => $q9->id]);
      Option::create(['answer' => 'nav-bar','points'=>'0', 'question_id' => $q9->id]);
    }
}
