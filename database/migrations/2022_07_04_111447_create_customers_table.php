<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();             //3 creating migration table php artisan make:migration create_customers_table
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["M","F","O"]); //1php artisan config:cache
            $table->text('address');                          //php artisan migrate 2 already created
            $table->date('dob')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points') ->default(0);
            $table->timestamps(); //// php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
