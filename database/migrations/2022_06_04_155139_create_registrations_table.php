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
            $table->string('name');
            $table->string('surname');
            $table->string('nickname');
            $table->date('birth');
            $table->enum('gender', ['men', 'women', 'other']);
            $table->enum('blood_type', ['A', 'B', 'AB', 'O']);
            $table->string('religion');
            $table->text('address');
            $table->string('province');
            $table->string('district');
            $table->string('subdistrict');
            $table->char('phone', 10);
            $table->string('email');
            $table->enum('education_level', ['M.4', 'M.5' ,'M.6', 'HVC.', 'TC.']);
            $table->string('school');
            $table->string('education_program');
            $table->string('education_certificate');
            $table->boolean('has_congenital_disease')->default(0);
            $table->string('congenital_disease_detail')->nullable();
            $table->boolean('has_allergic')->default(0);
            $table->string('allergic_detail')->nullable();
            $table->enum('shirt_size', ['S', 'M', 'L', 'XL', '2XL', '3XL']);
            $table->text('activities_detail');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_surname');
            $table->char('emergency_contact_phone', 10);
            $table->string('emergency_contact_relationship');
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
