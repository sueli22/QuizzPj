<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;


    /**
     * Run the migrations.
     */
    class CreateQuestionsTable extends Migration
    {
        public function up()
        {
            Schema::create('questions', function (Blueprint $table) {
                $table->id();
                $table->foreignId('category_id')->constrained()->cascadeOnDelete();
                $table->longText('name');
                $table->timestamps();


            });
        }

        public function down()
        {
            // Drop foreign key constraint before dropping the table


            Schema::dropIfExists('questions');
        }
    };
