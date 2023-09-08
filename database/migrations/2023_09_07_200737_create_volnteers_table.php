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
        Schema::create('volnteers', function (Blueprint $table) {
            $table->id();
            $table->string('volunteer_name'); // Corrected column name
            // $table->unsignedInteger('category_id');
            $table->text('description'); // Corrected column name
            $table->integer('price');
            $table->mediumText('main_picture');
            $table->timestamps();

            // $table->foreignId('category_id')->references('id')->on('categories')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('category_id')->nullable()->constrained('category')->onDelete('cascade')->onUpdate('cascade');

            // $table->foreignId('category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            
                // $table->foreignId('category_id')->nullable()->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volnteers');
    }
};