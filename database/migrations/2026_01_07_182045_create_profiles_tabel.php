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
        Schema::create('profiles_tabel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");//cascade delete the table when user is deleted
            $table->String("profile_image")->nullable(); //nullable means optional you can add later
            $table->text("bio")->nullable();
            $table->string("phone", 10)->nullable();
            $table->date("Date_of_Birth")->nullable();
            $table->text("email"); //required field
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles_tabel');
    }
};
