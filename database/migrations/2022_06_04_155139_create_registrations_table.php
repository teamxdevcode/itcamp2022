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
        Schema::create('registrations', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->primary();
            $table->enum('current_step', [1,2,3,4]);
            $table->string('name');
            $table->string('surname');
            $table->string('nickname');
            $table->date('birth');
            $table->enum('gender', ['men', 'women', 'other']);
            $table->enum('blood_type', ['A', 'B', 'AB', 'O']);
            $table->string('religion');
            $table->text('address');
            // $table->string('province');
            // $table->string('district');
            // $table->string('subdistrict');
            $table->char('phone', 10);
            $table->string('email');
            $table->enum('education_level', ['M.4', 'M.5' ,'M.6', 'HVC.', 'TC.']);
            $table->string('school');
            $table->string('education_program');
            $table->string('education_certificate');
            $table->boolean('has_congenital_disease')->nullable();
            $table->string('congenital_disease_detail')->nullable();
            $table->boolean('has_food_allergic')->nullable();
            $table->string('food_allergic_detail')->nullable();
            $table->boolean('has_drug_allergic')->nullable();
            $table->string('drug_allergic_detail')->nullable();
            $table->enum('shirt_size', ['S', 'M', 'L', 'XL', '2XL', '3XL'])->nullable();
            $table->string('known_from')->nullable();
            $table->text('activities_detail')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_surname')->nullable();
            $table->char('emergency_contact_phone', 10)->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->enum('subcamp', ['Webtopia', 'Datavergent', 'Game runner', 'Nettapunk'])->nullable();
            $table->timestamps();
        });

        Schema::table('registrations', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
