<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recycle_bin', function (Blueprint $table) {
            $table->id();
          //  $table->foreignId('item_id')->constrained();
            $table->unsignedBigInteger('item_id');
            $table->string('table');
            $table->string('location');
            $table->softDeletes();

            $table->foreign(columns: 'item_id')->references(columns: 'id')->on(table: 'books');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recycle_bin');
    }
};
