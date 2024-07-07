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
            'password' => bcrypt('wyine'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'wyinemayzin',
            'email' => 'wyinemayzin44194419@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'KyawKyaw',
            'email' => 'kyawkyaw@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);
        User::factory()->create([
            'name' => 'HlaHla',
            'email' => 'hla@gmail.com',
            'password' => bcrypt('naing'),
            'role' => 'user'
        ]);

        $c1 =  Category::create(['name' => 'Laravel']);
        $c2 = Category::create(['name' => 'PHP']);
        $c3 = Category::create(['name' => 'Boostrap']);
        $c4 = Category::create(['name' => 'HTML']);
        $c5 = Category::create(['name' => 'CSS']);
        $c6 = Category::create(['name' => 'Javascript']);
        $c7 = Category::create(['name' => 'C#']);
        $c8 = Category::create(['name' => 'java']);
        $c9 = Category::create(['name' => 'Python']);

        $q1 =   Question::create(['name' => 'Laravel ကို ဘာအတွက် အဓိကသုံးတာလဲ?', 'category_id' => $c1->id]);
        $q2 = Question::create(['name' => 'အောက်ဖော်ပြပါအရာများထဲမှ မည်သည့်အရာသည် ဒေတာဘေ့စ်မေးမြန်းချက်များကို ရိုးရှင်းလွယ်ကူစေသည့် Laravel အင်္ဂါရပ်တစ်ခုဖြစ်သနည်း', 'category_id' => $c1->id]);
        $q3 =  Question::create(['name' => 'Laravel တွင် controller အသစ်တစ်ခုဖန်တီးရန် မည်သည့် command ကိုအသုံးပြုသနည်?', 'category_id' => $c1->id]);

        $q4 =  Question::create(['name' => 'အောက်ပါတို့ထဲမှ မည်သည့်နည်းသည် PHP တွင် variable တစ်ခုကိုကြေငြာရန်နည်းလမ်းဖြစ်သနည်း?', 'category_id' => $c2->id]);
        $q5 =  Question::create(['name' => 'Which function in PHP is used to include the content of one PHP file into another PHP file?', 'category_id' => $c2->id]);
        $q6 =  Question::create(['name' => 'PHP ဖိုင်များအတွက် မူရင်းဖိုင် extension ကဘာလဲ?', 'category_id' => $c2->id]);

        $q7 =   Question::create(['name' => 'Bootstrap က ဘာအတွက် အဓိကသုံးတာလဲ။', 'category_id' => $c3->id]);
        $q8 =  Question::create(['name' => 'Which class in Bootstrap is used to create a responsive grid system?', 'category_id' => $c3->id]);
        $q9 =  Question::create(['name' => 'NavBarတစ်ခုဖန်တီးရန် မည်သည့် Bootstrap အစိတ်အပိုင်းကို အသုံးပြုသနည်း။', 'category_id' => $c3->id]);

        $q10 = Question::create(['name' => 'HTML ဆိုသည်မှာ ဘာကို ရည်ညွှန်းသလဲ?', 'category_id' => $c4->id]);
        $q11 = Question::create(['name' => 'HTML မှာ element တစ်ခုရဲ့ attribute အလုပ်လုပ်ပုံကို ရှင်းပြပါ။', 'category_id' => $c4->id]);
        $q12 = Question::create(['name' => 'HTML မှာ form ကို မည်သို့ ဖန်တီးသလဲ?', 'category_id' => $c4->id]);

        $q13 = Question::create(['name' => 'CSS ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c5->id]);
        $q14 = Question::create(['name' => 'CSS မှာ class selector နဲ့ id selector အကြား ကွာခြားချက်ကို ရှင်းပြပါ။', 'category_id' => $c5->id]);
        $q15 = Question::create(['name' => 'CSS မှာ box model ဆိုတာ ဘာလဲ?', 'category_id' => $c5->id]);

        $q16 = Question::create(['name' => 'JavaScript ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c6->id]);
        $q17 = Question::create(['name' => 'JavaScript မှာ variable တစ်ခုဖန်တီးရန် မည်သည့် keyword များကိုအသုံးပြုသနည်း?', 'category_id' => $c6->id]);
        $q18 = Question::create(['name' => 'JavaScript မှာ function တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c6->id]);

        $q19 = Question::create(['name' => 'C# ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c7->id]);
        $q20 = Question::create(['name' => 'C# မှာ class တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c7->id]);
        $q21 = Question::create(['name' => 'C# မှာ interface နဲ့ abstract class အကြား ကွာခြားချက်ကို ရှင်းပြပါ။', 'category_id' => $c7->id]);

        $q22 = Question::create(['name' => 'Java ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c8->id]);
        $q23 = Question::create(['name' => 'Java မှာ class တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c8->id]);
        $q24 = Question::create(['name' => 'Java မှာ exception handling ကို မည်သို့ ပြုလုပ်သနည်း?', 'category_id' => $c8->id]);

        $q25 = Question::create(['name' => 'Python ကို ဘာအတွက် အဓိကသုံးလဲ?', 'category_id' => $c9->id]);
        $q26 = Question::create(['name' => 'Python မှာ function တစ်ခုရေးသားရန် syntax ကို ရေးပြပါ။', 'category_id' => $c9->id]);
        $q27 = Question::create(['name' => 'Python မှာ list comprehension ကို မည်သို့အသုံးပြုသနည်း?', 'category_id' => $c9->id]);

        Option::create(['answer' => 'Building mobile applications', 'points' => '0', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Creating desktop software', 'points' => '1', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Developing web applications', 'points' => '0', 'question_id' => $q1->id]);
        Option::create(['answer' => 'Designing graphic interfaces', 'points' => '0', 'question_id' => $q1->id]);

        Option::create(['answer' => 'Eloquent ORM', 'points' => '0', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Blade templating', 'points' => '0', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Middleware', 'points' => '1', 'question_id' => $q2->id]);
        Option::create(['answer' => 'Artisan', 'points' => '0', 'question_id' => $q2->id]);

        Option::create(['answer' => ' php artisan make', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => 'php new', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => ' artisan create', 'points' => '0', 'question_id' => $q3->id]);
        Option::create(['answer' => ' composer create-controller', 'points' => '1', 'question_id' => $q3->id]);

        Option::create(['answer' => ' var $variable_name;', 'points' => '1', 'question_id' => $q4->id]);
        Option::create(['answer' => '$variable_name;', 'points' => '0', 'question_id' => $q4->id]);
        Option::create(['answer' => ' variable $variable_name;', 'points' => '0', 'question_id' => $q4->id]);
        Option::create(['answer' => ' declare $variable_name;', 'points' => '0', 'question_id' => $q4->id]);

        Option::create(['answer' => 'require()', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => ' import();', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => ' include();', 'points' => '1', 'question_id' => $q5->id]);
        Option::create(['answer' => 'load();', 'points' => '0', 'question_id' => $q5->id]);

        Option::create(['answer' => '.html', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => '.php', 'points' => '1', 'question_id' => $q5->id]);
        Option::create(['answer' => ' .js', 'points' => '0', 'question_id' => $q5->id]);
        Option::create(['answer' => '.css;', 'points' => '0', 'question_id' => $q5->id]);

        Option::create(['answer' => '.html', 'points' => '0', 'question_id' => $q6->id]);
        Option::create(['answer' => '.php', 'points' => '0', 'question_id' => $q6->id]);
        Option::create(['answer' => ' .js', 'points' => '1', 'question_id' => $q6->id]);
        Option::create(['answer' => '.css;', 'points' => '0', 'question_id' => $q6->id]);

        Option::create(['answer' => ' Developing mobile applications', 'points' => '0', 'question_id' => $q7->id]);
        Option::create(['answer' => ' Managing databases', 'points' => '0', 'question_id' => $q7->id]);
        Option::create(['answer' => 'Creating responsive web designs', 'points' => '1', 'question_id' => $q7->id]);
        Option::create(['answer' => 'Writing server-side scripts', 'points' => '0', 'question_id' => $q7->id]);

        Option::create(['answer' => 'grid-responsive', 'points' => '0', 'question_id' => $q8->id]);
        Option::create(['answer' => 'container-grid', 'points' => '0', 'question_id' => $q8->id]);
        Option::create(['answer' => 'row', 'points' => '1', 'question_id' => $q8->id]);
        Option::create(['answer' => 'grid-system', 'points' => '0', 'question_id' => $q8->id]);

        Option::create(['answer' => 'navbar', 'points' => '1', 'question_id' => $q9->id]);
        Option::create(['answer' => 'nav', 'points' => '0', 'question_id' => $q9->id]);
        Option::create(['answer' => 'navigation', 'points' => '0', 'question_id' => $q9->id]);
        Option::create(['answer' => 'nav-bar', 'points' => '0', 'question_id' => $q9->id]);

        Option::create(['answer' => 'HyperText Markup Language', 'points' => '1', 'question_id' => $q10->id]);
        Option::create(['answer' => 'HyperText Markdown Language', 'points' => '0', 'question_id' => $q10->id]);
        Option::create(['answer' => 'Home Tool Markup Language', 'points' => '0', 'question_id' => $q10->id]);
        Option::create(['answer' => 'Hyperlink and Text Markup Language', 'points' => '0', 'question_id' => $q10->id]);

        Option::create(['answer' => 'Attributes provide additional information about an element', 'points' => '1', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are used to style an element', 'points' => '0', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are only used in HTML forms', 'points' => '0', 'question_id' => $q11->id]);
        Option::create(['answer' => 'Attributes are used to link external CSS files', 'points' => '0', 'question_id' => $q11->id]);

        Option::create(['answer' => '<form>', 'points' => '1', 'question_id' => $q12->id]);
        Option::create(['answer' => '<input>', 'points' => '0', 'question_id' => $q12->id]);
        Option::create(['answer' => '<forminput>', 'points' => '0', 'question_id' => $q12->id]);
        Option::create(['answer' => '<formelement>', 'points' => '0', 'question_id' => $q12->id]);

        Option::create(['answer' => 'CSS is used for designing web pages', 'points' => '1', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is a programming language', 'points' => '0', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is used for server-side scripting', 'points' => '0', 'question_id' => $q13->id]);
        Option::create(['answer' => 'CSS is used to create databases', 'points' => '0', 'question_id' => $q13->id]);

        Option::create(['answer' => 'Class selectors are defined with a dot (.), ID selectors are defined with a hash (#)', 'points' => '1', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Class selectors are defined with a hash (#), ID selectors are defined with a dot (.)', 'points' => '0', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Both are defined with a dot (.)', 'points' => '0', 'question_id' => $q14->id]);
        Option::create(['answer' => 'Both are defined with a hash (#)', 'points' => '0', 'question_id' => $q14->id]);

        Option::create(['answer' => 'The box model consists of margins, borders, padding, and the actual content', 'points' => '1', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is used to display flex and grid layouts', 'points' => '0', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is a method to create rounded corners in CSS', 'points' => '0', 'question_id' => $q15->id]);
        Option::create(['answer' => 'The box model is a way to center content horizontally and vertically', 'points' => '0', 'question_id' => $q15->id]);

        Option::create(['answer' => 'JavaScript is used to create interactive web pages', 'points' => '1', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is used to style web pages', 'points' => '0', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is a server-side language', 'points' => '0', 'question_id' => $q16->id]);
        Option::create(['answer' => 'JavaScript is used to manage databases', 'points' => '0', 'question_id' => $q16->id]);

        Option::create(['answer' => 'var, let, and const', 'points' => '1', 'question_id' => $q17->id]);
        Option::create(['answer' => 'let, set, and const', 'points' => '0', 'question_id' => $q17->id]);
        Option::create(['answer' => 'var, set, and const', 'points' => '0', 'question_id' => $q17->id]);
        Option::create(['answer' => 'var, let, and define', 'points' => '0', 'question_id' => $q17->id]);

        Option::create(['answer' => 'function myFunction() { }', 'points' => '1', 'question_id' => $q18->id]);
        Option::create(['answer' => 'def myFunction() { }', 'points' => '0', 'question_id' => $q18->id]);
        Option::create(['answer' => 'function: myFunction() { }', 'points' => '0', 'question_id' => $q18->id]);
        Option::create(['answer' => 'myFunction function() { }', 'points' => '0', 'question_id' => $q18->id]);

        Option::create(['answer' => 'C# is used for developing Windows applications and games', 'points' => '1', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is used for web development only', 'points' => '0', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is a variant of C++', 'points' => '0', 'question_id' => $q19->id]);
        Option::create(['answer' => 'C# is used for managing databases', 'points' => '0', 'question_id' => $q19->id]);

        Option::create(['answer' => 'public class MyClass { }', 'points' => '1', 'question_id' => $q20->id]);
        Option::create(['answer' => 'class MyClass { }', 'points' => '0', 'question_id' => $q20->id]);
        Option::create(['answer' => 'public MyClass class { }', 'points' => '0', 'question_id' => $q20->id]);
        Option::create(['answer' => 'MyClass public class { }', 'points' => '0', 'question_id' => $q20->id]);

        Option::create(['answer' => 'An interface can only contain declarations, an abstract class can contain both declarations and implementations', 'points' => '1', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An abstract class can only contain declarations, an interface can contain both declarations and implementations', 'points' => '0', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An interface and an abstract class are the same', 'points' => '0', 'question_id' => $q21->id]);
        Option::create(['answer' => 'An abstract class is a type of interface', 'points' => '0', 'question_id' => $q21->id]);

        Option::create(['answer' => 'Java is used for developing web applications, desktop applications, and mobile applications', 'points' => '1', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is used for database management only', 'points' => '0', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is used for styling web pages', 'points' => '0', 'question_id' => $q22->id]);
        Option::create(['answer' => 'Java is a variant of JavaScript', 'points' => '0', 'question_id' => $q22->id]);

        Option::create(['answer' => 'public class MyClass { }', 'points' => '1', 'question_id' => $q23->id]);
        Option::create(['answer' => 'class MyClass { }', 'points' => '0', 'question_id' => $q23->id]);
        Option::create(['answer' => 'public MyClass class { }', 'points' => '0', 'question_id' => $q23->id]);
        Option::create(['answer' => 'MyClass public class { }', 'points' => '0', 'question_id' => $q23->id]);

        Option::create(['answer' => 'try { } catch(Exception e) { }', 'points' => '1', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } except(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } finally(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);
        Option::create(['answer' => 'try { } else(Exception e) { }', 'points' => '0', 'question_id' => $q24->id]);

        Option::create(['answer' => 'Python is used for web development, data analysis, machine learning, and more', 'points' => '1', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is used only for web development', 'points' => '0', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is a database management system', 'points' => '0', 'question_id' => $q25->id]);
        Option::create(['answer' => 'Python is used only for scripting in Linux', 'points' => '0', 'question_id' => $q25->id]);

        Option::create(['answer' => 'def my_function():', 'points' => '1', 'question_id' => $q26->id]);
        Option::create(['answer' => 'function my_function():', 'points' => '0', 'question_id' => $q26->id]);
        Option::create(['answer' => 'my_function() {}', 'points' => '0', 'question_id' => $q26->id]);
        Option::create(['answer' => 'def my_function() {}', 'points' => '0', 'question_id' => $q26->id]);

        Option::create(['answer' => '[x for x in iterable]', 'points' => '1', 'question_id' => $q27->id]);
        Option::create(['answer' => '{x for x in iterable}', 'points' => '0', 'question_id' => $q27->id]);
        Option::create(['answer' => '(x for x in iterable)', 'points' => '0', 'question_id' => $q27->id]);
        Option::create(['answer' => '[x, y in iterable]', 'points' => '0', 'question_id' => $q27->id]);

        $q28 = Question::create(['name' => 'What does HTML stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'HyperText Markup Language', 'points' => '1', 'question_id' => $q28->id]);
Option::create(['answer' => 'HyperText Markdown Language', 'points' => '0', 'question_id' => $q28->id]);
Option::create(['answer' => 'Home Tool Markup Language', 'points' => '0', 'question_id' => $q28->id]);
Option::create(['answer' => 'Hyperlink and Text Markup Language', 'points' => '0', 'question_id' => $q28->id]);


$q29 = Question::create(['name' => 'Which tag is used to define a hyperlink in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<a>', 'points' => '1', 'question_id' => $q29->id]);
Option::create(['answer' => '<link>', 'points' => '0', 'question_id' => $q29->id]);
Option::create(['answer' => '<href>', 'points' => '0', 'question_id' => $q29->id]);
Option::create(['answer' => '<hyperlink>', 'points' => '0', 'question_id' => $q29->id]);

$q30 = Question::create(['name' => 'Which tag is used to define an unordered list in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<ul>', 'points' => '1', 'question_id' => $q30->id]);
Option::create(['answer' => '<ol>', 'points' => '0', 'question_id' => $q30->id]);
Option::create(['answer' => '<li>', 'points' => '0', 'question_id' => $q30->id]);
Option::create(['answer' => '<list>', 'points' => '0', 'question_id' => $q30->id]);

$q31 = Question::create(['name' => 'What does the HTML tag <img> stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'Image', 'points' => '1', 'question_id' => $q31->id]);
Option::create(['answer' => 'Insert', 'points' => '0', 'question_id' => $q31->id]);
Option::create(['answer' => 'Input', 'points' => '0', 'question_id' => $q31->id]);
Option::create(['answer' => 'Imagine', 'points' => '0', 'question_id' => $q31->id]);

$q32 = Question::create(['name' => 'Which attribute is used to define inline styles in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => 'style', 'points' => '1', 'question_id' => $q32->id]);
Option::create(['answer' => 'class', 'points' => '0', 'question_id' => $q32->id]);
Option::create(['answer' => 'id', 'points' => '0', 'question_id' => $q32->id]);
Option::create(['answer' => 'font', 'points' => '0', 'question_id' => $q32->id]);
$q33 = Question::create(['name' => 'What does the HTML tag <p> stand for?', 'category_id' => $c4->id]);
Option::create(['answer' => 'Paragraph', 'points' => '1', 'question_id' => $q33->id]);
Option::create(['answer' => 'Pre', 'points' => '0', 'question_id' => $q33->id]);
Option::create(['answer' => 'Post', 'points' => '0', 'question_id' => $q33->id]);
Option::create(['answer' => 'Page', 'points' => '0', 'question_id' => $q33->id]);

$q34 = Question::create(['name' => 'Which tag is used to define a table in HTML?', 'category_id' => $c4->id]);
Option::create(['answer' => '<table>', 'points' => '1', 'question_id' => $q34->id]);
Option::create(['answer' => '<tr>', 'points' => '0', 'question_id' => $q34->id]);
Option::create(['answer' => '<td>', 'points' => '0', 'question_id' => $q34->id]);
Option::create(['answer' => '<th>', 'points' => '0', 'question_id' => $q34->id]);

$q35 = Question::create(['name' => 'What does CSS stand for?', 'category_id' => $c5->id]);
Option::create(['answer' => 'Cascading Style Sheets', 'points' => '1', 'question_id' => $q35->id]);
Option::create(['answer' => 'Computer Style Sheets', 'points' => '0', 'question_id' => $q35->id]);
Option::create(['answer' => 'Creative Style Sheets', 'points' => '0', 'question_id' => $q35->id]);
Option::create(['answer' => 'Cascading Sheets Style', 'points' => '0', 'question_id' => $q35->id]);
$q36 = Question::create(['name' => 'Which CSS property is used to change the text color of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'color', 'points' => '1', 'question_id' => $q36->id]);
Option::create(['answer' => 'font-color', 'points' => '0', 'question_id' => $q36->id]);
Option::create(['answer' => 'text-color', 'points' => '0', 'question_id' => $q36->id]);
Option::create(['answer' => 'text-style', 'points' => '0', 'question_id' => $q36->id]);

$q37 = Question::create(['name' => 'Which CSS property is used to change the background color of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'background-color', 'points' => '1', 'question_id' => $q37->id]);
Option::create(['answer' => 'color-background', 'points' => '0', 'question_id' => $q37->id]);
Option::create(['answer' => 'bg-color', 'points' => '0', 'question_id' => $q37->id]);
Option::create(['answer' => 'background', 'points' => '0', 'question_id' => $q37->id]);

$q38 = Question::create(['name' => 'Which CSS property is used to change the font size of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'font-size', 'points' => '1', 'question_id' => $q38->id]);
Option::create(['answer' => 'size', 'points' => '0', 'question_id' => $q38->id]);
Option::create(['answer' => 'text-size', 'points' => '0', 'question_id' => $q38->id]);
Option::create(['answer' => 'font-style', 'points' => '0', 'question_id' => $q38->id]);

$q39 = Question::create(['name' => 'Which CSS property is used to make text bold?', 'category_id' => $c5->id]);
Option::create(['answer' => 'font-weight', 'points' => '1', 'question_id' => $q39->id]);
Option::create(['answer' => 'bold', 'points' => '0', 'question_id' => $q39->id]);
Option::create(['answer' => 'text-bold', 'points' => '0', 'question_id' => $q39->id]);
Option::create(['answer' => 'weight', 'points' => '0', 'question_id' => $q39->id]);

$q40 = Question::create(['name' => 'Which CSS property is used to align text to the center of an element?', 'category_id' => $c5->id]);
Option::create(['answer' => 'text-align', 'points' => '1', 'question_id' => $q40->id]);
Option::create(['answer' => 'align', 'points' => '0', 'question_id' => $q40->id]);
Option::create(['answer' => 'center-align', 'points' => '0', 'question_id' => $q40->id]);
Option::create(['answer' => 'align-text', 'points' => '0', 'question_id' => $q40->id]);

$q41 = Question::create(['name' => 'Which CSS property is used to add space between letters?', 'category_id' => $c5->id]);
Option::create(['answer' => 'letter-spacing', 'points' => '1', 'question_id' => $q41->id]);
Option::create(['answer' => 'space-letter', 'points' => '0', 'question_id' => $q41->id]);
Option::create(['answer' => 'spacing-letter', 'points' => '0', 'question_id' => $q41->id]);
Option::create(['answer' => 'text-spacing', 'points' => '0', 'question_id' => $q41->id]);
$q42 = Question::create(['name' => 'What is JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'A scripting language', 'points' => '1', 'question_id' => $q42->id]);
Option::create(['answer' => 'A programming language', 'points' => '0', 'question_id' => $q42->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q42->id]);
Option::create(['answer' => 'A styling language', 'points' => '0', 'question_id' => $q42->id]);
$q43 = Question::create(['name' => 'Which keyword is used to declare a variable in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'var', 'points' => '1', 'question_id' => $q43->id]);
Option::create(['answer' => 'let', 'points' => '0', 'question_id' => $q43->id]);
Option::create(['answer' => 'const', 'points' => '0', 'question_id' => $q43->id]);
Option::create(['answer' => 'variable', 'points' => '0', 'question_id' => $q43->id]);

$q44 = Question::create(['name' => 'What is the correct way to write an array in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'var colors = ["red", "green", "blue"];', 'points' => '1', 'question_id' => $q44->id]);
Option::create(['answer' => 'array colors = ["red", "green", "blue"];', 'points' => '0', 'question_id' => $q44->id]);
Option::create(['answer' => 'colors = "red", "green", "blue";', 'points' => '0', 'question_id' => $q44->id]);
Option::create(['answer' => 'colors = ["red", "green", "blue"];', 'points' => '0', 'question_id' => $q44->id]);
$q45 = Question::create(['name' => 'Which operator is used for strict equality comparison in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => '===', 'points' => '1', 'question_id' => $q45->id]);
Option::create(['answer' => '==', 'points' => '0', 'question_id' => $q45->id]);
Option::create(['answer' => '=', 'points' => '0', 'question_id' => $q45->id]);
Option::create(['answer' => '!==', 'points' => '0', 'question_id' => $q45->id]);
$q46 = Question::create(['name' => 'Which built-in method returns the length of a string in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => 'length()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'size()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'getSize()', 'points' => '0', 'question_id' => $q46->id]);
Option::create(['answer' => 'length', 'points' => '1', 'question_id' => $q46->id]);
$q47 = Question::create(['name' => 'Which event occurs when the user clicks on an HTML element?', 'category_id' => $c6->id]);
Option::create(['answer' => 'onclick', 'points' => '1', 'question_id' => $q47->id]);
Option::create(['answer' => 'onmouseclick', 'points' => '0', 'question_id' => $q47->id]);
Option::create(['answer' => 'onchange', 'points' => '0', 'question_id' => $q47->id]);
Option::create(['answer' => 'onselect', 'points' => '0', 'question_id' => $q47->id]);
$q48 = Question::create(['name' => 'What is the output of `console.log(3 + "2")` in JavaScript?', 'category_id' => $c6->id]);
Option::create(['answer' => '32', 'points' => '1', 'question_id' => $q48->id]);
Option::create(['answer' => '5', 'points' => '0', 'question_id' => $q48->id]);
Option::create(['answer' => 'undefined', 'points' => '0', 'question_id' => $q48->id]);
Option::create(['answer' => 'error', 'points' => '0', 'question_id' => $q48->id]);
$q49 = Question::create(['name' => 'What does PHP stand for?', 'category_id' => $c2->id]);
Option::create(['answer' => 'Hypertext Preprocessor', 'points' => '1', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Processor', 'points' => '0', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Programming', 'points' => '0', 'question_id' => $q49->id]);
Option::create(['answer' => 'Hypertext Protocol', 'points' => '0', 'question_id' => $q49->id]);
$q50 = Question::create(['name' => 'Which of the following is not a valid PHP variable name?', 'category_id' => $c2->id]);
Option::create(['answer' => '2myVar', 'points' => '1', 'question_id' => $q50->id]);
Option::create(['answer' => '_myVar', 'points' => '0', 'question_id' => $q50->id]);
Option::create(['answer' => '$myVar', 'points' => '0', 'question_id' => $q50->id]);
Option::create(['answer' => 'myVar2', 'points' => '0', 'question_id' => $q50->id]);
$q51 = Question::create(['name' => 'Which function in PHP is used to redirect the browser to a different URL?', 'category_id' => $c2->id]);
Option::create(['answer' => 'header()', 'points' => '1', 'question_id' => $q51->id]);
Option::create(['answer' => 'redirect()', 'points' => '0', 'question_id' => $q51->id]);
Option::create(['answer' => 'location()', 'points' => '0', 'question_id' => $q51->id]);
Option::create(['answer' => 'forward()', 'points' => '0', 'question_id' => $q51->id]);
$q52 = Question::create(['name' => 'How do you start a PHP session?', 'category_id' => $c2->id]);
Option::create(['answer' => 'session_start()', 'points' => '1', 'question_id' => $q52->id]);
Option::create(['answer' => 'start_session()', 'points' => '0', 'question_id' => $q52->id]);
Option::create(['answer' => 'session()', 'points' => '0', 'question_id' => $q52->id]);
Option::create(['answer' => 'init_session()', 'points' => '0', 'question_id' => $q52->id]);
$q53 = Question::create(['name' => 'Which PHP function is used to get the length of a string?', 'category_id' => $c2->id]);
Option::create(['answer' => 'strlen()', 'points' => '1', 'question_id' => $q53->id]);
Option::create(['answer' => 'length()', 'points' => '0', 'question_id' => $q53->id]);
Option::create(['answer' => 'strlength()', 'points' => '0', 'question_id' => $q53->id]);
Option::create(['answer' => 'string_length()', 'points' => '0', 'question_id' => $q53->id]);
$q54 = Question::create(['name' => 'What does the `echo` function do in PHP?', 'category_id' => $c2->id]);
Option::create(['answer' => 'Outputs one or more strings', 'points' => '1', 'question_id' => $q54->id]);
Option::create(['answer' => 'Declares a variable', 'points' => '0', 'question_id' => $q54->id]);
Option::create(['answer' => 'Starts a loop', 'points' => '0', 'question_id' => $q54->id]);
Option::create(['answer' => 'Ends a session', 'points' => '0', 'question_id' => $q54->id]);
$q55 = Question::create(['name' => 'Which operator in PHP is used to check if two values are equal and of the same data type?', 'category_id' => $c2->id]);
Option::create(['answer' => '===', 'points' => '1', 'question_id' => $q55->id]);
Option::create(['answer' => '==', 'points' => '0', 'question_id' => $q55->id]);
Option::create(['answer' => '=+', 'points' => '0', 'question_id' => $q55->id]);
Option::create(['answer' => '!=', 'points' => '0', 'question_id' => $q55->id]);
$q56 = Question::create(['name' => 'What is Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'A PHP framework', 'points' => '1', 'question_id' => $q56->id]);
Option::create(['answer' => 'A JavaScript library', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A CSS framework', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q56->id]);
$q57 = Question::create(['name' => 'Which command is used to create a new Laravel project?', 'category_id' => $c1->id]);
Option::create(['answer' => 'composer create-project laravel/laravel', 'points' => '1', 'question_id' => $q57->id]);
Option::create(['answer' => 'php artisan new laravel', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'laravel new project', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'composer require laravel/laravel', 'points' => '0', 'question_id' => $q57->id]);
$q58 = Question::create(['name' => 'Which folder contains the main configuration files of a Laravel project?', 'category_id' => $c1->id]);
Option::create(['answer' => 'config/', 'points' => '1', 'question_id' => $q58->id]);
Option::create(['answer' => 'app/', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'public/', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'resources/', 'points' => '0', 'question_id' => $q58->id]);
$q59 = Question::create(['name' => 'Which artisan command is used to create a new controller in Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'php artisan make:controller', 'points' => '1', 'question_id' => $q59->id]);
Option::create(['answer' => 'php make:controller', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'artisan make:controller', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'php new:controller', 'points' => '0', 'question_id' => $q59->id]);
$q60 = Question::create(['name' => 'What is the purpose of Laravel\'s Eloquent ORM?', 'category_id' => $c1->id]);
Option::create(['answer' => 'To interact with databases', 'points' => '1', 'question_id' => $q60->id]);
Option::create(['answer' => 'To create front-end components', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'To manage server configurations', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'To handle HTTP requests', 'points' => '0', 'question_id' => $q60->id]);
$q61 = Question::create(['name' => 'Which of the following is not a database supported by Laravel?', 'category_id' => $c1->id]);
Option::create(['answer' => 'MongoDB', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'MySQL', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'SQLite', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'Oracle', 'points' => '1', 'question_id' => $q61->id]);
$q62 = Question::create(['name' => 'What does CSRF protection in Laravel prevent?', 'category_id' => $c1->id]);
Option::create(['answer' => 'Cross-Site Request Forgery attacks', 'points' => '1', 'question_id' => $q62->id]);
Option::create(['answer' => 'Cross-Site Scripting attacks', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'SQL Injection attacks', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'Server-side request falsification', 'points' => '0', 'question_id' => $q62->id]);
$q56 = Question::create(['name' => 'What is C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'A programming language developed by Microsoft', 'points' => '1', 'question_id' => $q56->id]);
Option::create(['answer' => 'A JavaScript library', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q56->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q56->id]);
$q57 = Question::create(['name' => 'Which of the following is a feature of C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Object-oriented programming', 'points' => '1', 'question_id' => $q57->id]);
Option::create(['answer' => 'Functional programming', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'Procedural programming', 'points' => '0', 'question_id' => $q57->id]);
Option::create(['answer' => 'Scripting language', 'points' => '0', 'question_id' => $q57->id]);
$q58 = Question::create(['name' => 'Which IDE is commonly used for C# development?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Visual Studio', 'points' => '1', 'question_id' => $q58->id]);
Option::create(['answer' => 'Eclipse', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'Atom', 'points' => '0', 'question_id' => $q58->id]);
Option::create(['answer' => 'Sublime Text', 'points' => '0', 'question_id' => $q58->id]);
$q59 = Question::create(['name' => 'What does C# use to implement inheritance?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Keywords: `class` and `inherit`', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `base` and `derived`', 'points' => '1', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `super` and `extends`', 'points' => '0', 'question_id' => $q59->id]);
Option::create(['answer' => 'Keywords: `extends` and `implements`', 'points' => '0', 'question_id' => $q59->id]);

$q60 = Question::create(['name' => 'Which of the following is not a primitive data type in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Integer', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'String', 'points' => '0', 'question_id' => $q60->id]);
Option::create(['answer' => 'Array', 'points' => '1', 'question_id' => $q60->id]);
Option::create(['answer' => 'Boolean', 'points' => '0', 'question_id' => $q60->id]);
$q61 = Question::create(['name' => 'What is the correct way to declare a method in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'public void methodName()', 'points' => '1', 'question_id' => $q61->id]);
Option::create(['answer' => 'methodName(): public', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'void methodName()', 'points' => '0', 'question_id' => $q61->id]);
Option::create(['answer' => 'methodName(void)', 'points' => '0', 'question_id' => $q61->id]);
$q62 = Question::create(['name' => 'What is the purpose of using `using` statement in C#?', 'category_id' => $c7->id]);
Option::create(['answer' => 'To ensure that resources are properly disposed', 'points' => '1', 'question_id' => $q62->id]);
Option::create(['answer' => 'To import namespaces', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'To declare variables', 'points' => '0', 'question_id' => $q62->id]);
Option::create(['answer' => 'To define classes', 'points' => '0', 'question_id' => $q62->id]);
$q63 = Question::create(['name' => 'What is Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'A programming language', 'points' => '1', 'question_id' => $q63->id]);
Option::create(['answer' => 'A database management system', 'points' => '0', 'question_id' => $q63->id]);
Option::create(['answer' => 'A markup language', 'points' => '0', 'question_id' => $q63->id]);
Option::create(['answer' => 'A scripting language', 'points' => '0', 'question_id' => $q63->id]);

$q64 = Question::create(['name' => 'Which company developed Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Sun Microsystems', 'points' => '1', 'question_id' => $q64->id]);
Option::create(['answer' => 'Microsoft', 'points' => '0', 'question_id' => $q64->id]);
Option::create(['answer' => 'Oracle', 'points' => '0', 'question_id' => $q64->id]);
Option::create(['answer' => 'IBM', 'points' => '0', 'question_id' => $q64->id]);
$q65 = Question::create(['name' => 'Which of the following statements about Java is true?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Java is platform-independent', 'points' => '1', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is a procedural language', 'points' => '0', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is primarily used for front-end development', 'points' => '0', 'question_id' => $q65->id]);
Option::create(['answer' => 'Java is obsolete', 'points' => '0', 'question_id' => $q65->id]);
$q66 = Question::create(['name' => 'Which keyword is used to define a class in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'class', 'points' => '1', 'question_id' => $q66->id]);
Option::create(['answer' => 'function', 'points' => '0', 'question_id' => $q66->id]);
Option::create(['answer' => 'void', 'points' => '0', 'question_id' => $q66->id]);
Option::create(['answer' => 'public', 'points' => '0', 'question_id' => $q66->id]);
$q67 = Question::create(['name' => 'What is the output of `System.out.println(5 + "Hello");` in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => '5Hello', 'points' => '1', 'question_id' => $q67->id]);
Option::create(['answer' => '5 Hello', 'points' => '0', 'question_id' => $q67->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q67->id]);
Option::create(['answer' => 'Compiler warning', 'points' => '0', 'question_id' => $q67->id]);
$q68 = Question::create(['name' => 'Which method is used to get user input in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => 'Scanner.nextLine()', 'points' => '1', 'question_id' => $q68->id]);
Option::create(['answer' => 'System.in.read()', 'points' => '0', 'question_id' => $q68->id]);
Option::create(['answer' => 'Console.readLine()', 'points' => '0', 'question_id' => $q68->id]);
Option::create(['answer' => 'input()', 'points' => '0', 'question_id' => $q68->id]);

$q69 = Question::create(['name' => 'What is the default value of an integer variable in Java?', 'category_id' => $c8->id]);
Option::create(['answer' => '0', 'points' => '1', 'question_id' => $q69->id]);
Option::create(['answer' => 'null', 'points' => '0', 'question_id' => $q69->id]);
Option::create(['answer' => 'Undefined', 'points' => '0', 'question_id' => $q69->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q69->id]);

$q70 = Question::create(['name' => 'What type of language is Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'High-level programming language', 'points' => '1', 'question_id' => $q70->id]);
Option::create(['answer' => 'Low-level programming language', 'points' => '0', 'question_id' => $q70->id]);
Option::create(['answer' => 'Assembly language', 'points' => '0', 'question_id' => $q70->id]);
Option::create(['answer' => 'Machine language', 'points' => '0', 'question_id' => $q70->id]);
$q71 = Question::create(['name' => 'Which of the following is true about Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Python code is easy to read and maintain', 'points' => '1', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is a purely functional language', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python requires compilation before execution', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is not suitable for web development', 'points' => '0', 'question_id' => $q71->id]);
$q71 = Question::create(['name' => 'Which of the following is true about Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Python code is easy to read and maintain', 'points' => '1', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is a purely functional language', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python requires compilation before execution', 'points' => '0', 'question_id' => $q71->id]);
Option::create(['answer' => 'Python is not suitable for web development', 'points' => '0', 'question_id' => $q71->id]);
$q72 = Question::create(['name' => 'Which symbol is used for comments in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => '#', 'points' => '1', 'question_id' => $q72->id]);
Option::create(['answer' => '//', 'points' => '0', 'question_id' => $q72->id]);
Option::create(['answer' => '--', 'points' => '0', 'question_id' => $q72->id]);
Option::create(['answer' => '**', 'points' => '0', 'question_id' => $q72->id]);
$q73 = Question::create(['name' => 'Which of the following data types is mutable in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'List', 'points' => '1', 'question_id' => $q73->id]);
Option::create(['answer' => 'Tuple', 'points' => '0', 'question_id' => $q73->id]);
Option::create(['answer' => 'String', 'points' => '0', 'question_id' => $q73->id]);
Option::create(['answer' => 'Set', 'points' => '0', 'question_id' => $q73->id]);
$q74 = Question::create(['name' => 'What does the `print()` function do in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'Outputs text or variables to the console', 'points' => '1', 'question_id' => $q74->id]);
Option::create(['answer' => 'Executes a loop', 'points' => '0', 'question_id' => $q74->id]);
Option::create(['answer' => 'Defines a new function', 'points' => '0', 'question_id' => $q74->id]);
Option::create(['answer' => 'Imports a module', 'points' => '0', 'question_id' => $q74->id]);
$q75 = Question::create(['name' => 'What is the result of `3 + 2 * 4` in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => '11', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => '20', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => '11', 'points' => '0', 'question_id' => $q75->id]);
Option::create(['answer' => 'The expression is invalid', 'points' => '1', 'question_id' => $q75->id]);
$q76 = Question::create(['name' => 'Which keyword is used to define a function in Python?', 'category_id' => $c9->id]);
Option::create(['answer' => 'def', 'points' => '1', 'question_id' => $q76->id]);
Option::create(['answer' => 'function', 'points' => '0', 'question_id' => $q76->id]);
Option::create(['answer' => 'define', 'points' => '0', 'question_id' => $q76->id]);
Option::create(['answer' => 'func', 'points' => '0', 'question_id' => $q76->id]);

$q77 = Question::create(['name' => 'What type of language is JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Scripting language', 'points' => '1', 'question_id' => $q77->id]);
Option::create(['answer' => 'Markup language', 'points' => '0', 'question_id' => $q77->id]);
Option::create(['answer' => 'Programming language', 'points' => '0', 'question_id' => $q77->id]);
Option::create(['answer' => 'Styling language', 'points' => '0', 'question_id' => $q77->id]);
$q78 = Question::create(['name' => 'Which company developed JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'Netscape Communications Corporation', 'points' => '1', 'question_id' => $q78->id]);
Option::create(['answer' => 'Microsoft', 'points' => '0', 'question_id' => $q78->id]);
Option::create(['answer' => 'Oracle Corporation', 'points' => '0', 'question_id' => $q78->id]);
Option::create(['answer' => 'Google', 'points' => '0', 'question_id' => $q78->id]);
$q79 = Question::create(['name' => 'Which of the following is true about JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'JavaScript can be used on both the client-side and server-side', 'points' => '1', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is a compiled language', 'points' => '0', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is primarily used for styling web pages', 'points' => '0', 'question_id' => $q79->id]);
Option::create(['answer' => 'JavaScript is obsolete', 'points' => '0', 'question_id' => $q79->id]);
$q80 = Question::create(['name' => 'Which keyword is used to declare a variable in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'var', 'points' => '1', 'question_id' => $q80->id]);
Option::create(['answer' => 'int', 'points' => '0', 'question_id' => $q80->id]);
Option::create(['answer' => 'let', 'points' => '0', 'question_id' => $q80->id]);
Option::create(['answer' => 'variable', 'points' => '0', 'question_id' => $q80->id]);
$q81 = Question::create(['name' => 'What is the result of `3 + "2"` in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => '32', 'points' => '1', 'question_id' => $q81->id]);
Option::create(['answer' => '5', 'points' => '0', 'question_id' => $q81->id]);
Option::create(['answer' => '6', 'points' => '0', 'question_id' => $q81->id]);
Option::create(['answer' => 'Error', 'points' => '0', 'question_id' => $q81->id]);
$q82 = Question::create(['name' => 'Which function is used to output data in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'console.log()', 'points' => '1', 'question_id' => $q82->id]);
Option::create(['answer' => 'print()', 'points' => '0', 'question_id' => $q82->id]);
Option::create(['answer' => 'echo()', 'points' => '0', 'question_id' => $q82->id]);
Option::create(['answer' => 'output()', 'points' => '0', 'question_id' => $q82->id]);
$q83 = Question::create(['name' => 'What is the purpose of the `addEventListener` method in JavaScript?', 'category_id' => $c7->id]);
Option::create(['answer' => 'To attach an event handler to an element', 'points' => '1', 'question_id' => $q83->id]);
Option::create(['answer' => 'To create a new element', 'points' => '0', 'question_id' => $q83->id]);
Option::create(['answer' => 'To modify the style of an element', 'points' => '0', 'question_id' => $q83->id]);
Option::create(['answer' => 'To fetch data from a server', 'points' => '0', 'question_id' => $q83->id]);

    }
}
