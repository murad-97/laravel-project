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
            
            // $table->foreignId('category_id')->references('id')->on('categories')->unsigned();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreignId('category_id')->nullable()->constrained('category')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('categoryid')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignId('categoryid')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');

        });


        Schema::create('volnteerdetails', function (Blueprint $table) {

            $table->foreignId('volunteerid')->constrained('volunteer');

            // $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('userid')->constrained('users');
        });


        // Schema::enableForeignKeyConstraints();
        Schema::create('volnteeritems', function (Blueprint $table) {

            $table->foreignId('userid')->constrained('users');
            $table->foreignId('volunteerid')->constrained('volnteers');
        });

        
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