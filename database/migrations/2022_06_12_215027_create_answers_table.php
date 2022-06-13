<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->unsignedBigInteger('applicant_id')->primary();
            $table->enum('subcamp',['Webtopia','DataVergent','Game Runner','Nettapunk']);
            $table->json('camp_answer');
            $table->json('subcamp_answer')->nullable();
            $table->timestamps();

            $table->foreign('subcamp')->references('subcamp')->on('registrations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
};
