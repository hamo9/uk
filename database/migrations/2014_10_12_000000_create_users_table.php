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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('father_name');
            $table->string('grandfather_name');
            $table->string('family_name');
            $table->string('telephone_number');
            $table->string('email')->unique();
            $table->string('date_of_birth');
            $table->text('address');
            $table->string('specialization');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('personal_photo')->nullable();
            $table->string('national_number_card')->nullable();
            $table->string('certificate_graduation')->nullable();
            $table->string('experience_certificates')->nullable();
            $table->string('role')->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
