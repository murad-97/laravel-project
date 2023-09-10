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
        Schema::create('volnteeritems', function (Blueprint $table) {
            $table->id();
    
            // $table->unsignedInteger('user_id');
            // $table->unsignedInteger('volunteer_id');
            $table->bigInteger('qty');
            
            $table->timestamps();
        
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('user_id')->references('id')->on('users')->unsigned();
            // $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('volunteer_id')->references('id')->on('volunteers')->unsigned();


            // $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('volunteer_id')->nullable()->constrained('volnteers')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('volnteeritems');
    }
};