<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::table('pizzas', function (Blueprint $table) {
            $table->dropColumn('price');
        });

    }

    /**
     * Reverse the migrations.
     */

    //This migration removes the price column
    public function down()
    {
        Schema::table('pizzas', function (Blueprint $table) {
            // 
        });
    }
};
