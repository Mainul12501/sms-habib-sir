<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salary_grade')->nullable();
            $table
                ->integer('basic')
                ->default(0)
                ->nullable();
            $table
                ->integer('house_rent')
                ->default(0)
                ->nullable();
            $table
                ->integer('medical')
                ->default(0)
                ->nullable();
            $table
                ->integer('ta_da')
                ->default(0)
                ->nullable();
            $table
                ->integer('others')
                ->default(0)
                ->nullable();
            $table->text('note')->nullable();
            $table->string('slug')->nullable();
            $table
                ->tinyInteger('status')
                ->default(1)
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salary_grades');
    }
};
