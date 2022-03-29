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
        Schema::create('medics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('doctor_id');
            $table->text('title');
            $table->string('slug')->unique();
            $table->text('healthcondition');
            $table->integer('temperature');
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
        Schema::dropIfExists('medics');
    }
};
