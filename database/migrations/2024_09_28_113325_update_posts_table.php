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
        Schema::table('posts', function (Blueprint $table) {
            //creo la colonna per la foreing kay 
            $table-> unsignedBigInteger('category_id')->after('id');

            //vreo la FK sulla colonna creata 
            $table->foreing('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //elimino la FK
            $table->dropForeing();

            //elimino la colonna
        });
    }
};
