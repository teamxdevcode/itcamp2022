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
        Schema::create('confirms', function (Blueprint $table) {
            $table->unsignedBigInteger('applicant_id')->primary();
            $table->boolean('confirm');
            $table->string('nickname')->nullable();
            $table->string('transfer_statement')->nullable();
            $table->dateTime('transfer_at')->nullable();
            $table->string('identity_card')->nullable();
            $table->string('vaccine_certificate')->nullable();
            $table->json('food_restrictions')->nullable();
            $table->timestamps();
        });

        Schema::table('confirms', function (Blueprint $table) {
            $table->foreign('applicant_id')->references('applicant_id')->on('registrations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirms');
    }
};
