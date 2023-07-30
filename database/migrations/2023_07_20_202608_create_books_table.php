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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64);
            $table->string('description', 3000)->nullable();
            $table->unsignedInteger('page_count')->nullable();

            $table->string('isbn', 30)->nullable();
            $table->smallInteger('year')->nullable();
            $table->boolean('pdf')->default(0);
            $table->string('img_path', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        
            $table->foreignId('letter_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->foreignId('binding_id')->constrained();
            $table->foreignId('format_id')->constrained();
            $table->foreignId('publisher_id')->constrained();

/*    
            $table->unsignedBigInteger('letter_id');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('binding_id');
            $table->unsignedBigInteger('format_id');
            $table->unsignedBigInteger('publisher_id');

            $table->foreign('letter_id')->references('id')->on('letters');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('binding_id')->references('id')->on('bindings');
            $table->foreign('format_id')->references('id')->on('formats');
            $table->foreign('publisher_id')->references('id')->on('publishers');
*/

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
