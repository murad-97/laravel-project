<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();

        Schema::create('volnteerdetails', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('user_id')->references('id')->on('users');

            // $table->unsignedBigInteger('volunteer_id');
            // $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('volunteer_id')->references('id')->on('volunteers')->unsigned();
            // $table->foreignId('user_id')->references('id')->on('users')->unsigned();

            $table->bigInteger('price');
            $table->timestamps();


            // $table->foreignId('volunteer_id')->nullable()->constrained('volunteer')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('volunteer_id')->constrained('volunteer');

            // $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users');

        });
        // Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volnteerdetails');
    }
};