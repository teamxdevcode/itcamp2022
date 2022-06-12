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
            $table->unsignedBigInteger('applicant_id')->primary();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->date('birthday');
            $table->enum('gender', ['Male','Female','LGBTQ+']);
            $table->enum('blood_type', ['A','B','AB','O']);
            $table->enum('religion', ['Buddhism','Christianity','Islam','Other']);
            $table->text('address');
            $table->string('province');
            $table->string('subdistrict');
            $table->string('district');
            $table->char('phone', 10);
            $table->string('school');
            $table->enum('education_level', ['M.4','M.5','M.6','HVC.','TC.']);
            $table->string('educational_program');
            $table->string('educational_certificate');
            $table->string('congenital_disease');
            $table->string('allergic_drug');
            $table->string('allergen');
            $table->enum('shirt_size', ['S','M','L','XL','XXL','XXXL']);
            $table->string('known_us_from');
            $table->string('emergency_name');
            $table->string('emergency_surname');
            $table->char('emergency_phone', 10);
            $table->string('emergency_relationship');
            $table->enum('subcamp',['Webtopia','DataVergent','Game Runner','Nettapunk']);
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('applicants');
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
