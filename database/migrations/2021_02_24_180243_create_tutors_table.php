<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('enterprise');
            $table->enum('documentType', ['nie', 'dni', 'otros']);
            $table->string('document');
            $table->string('name');
            $table->string('lastName');
            $table->string('lastName2');
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->string('phone',12);
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
