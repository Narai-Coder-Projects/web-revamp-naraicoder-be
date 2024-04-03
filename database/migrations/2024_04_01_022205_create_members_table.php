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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('member_id');
            $table->string('image');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('place')->nullable();
            $table->date('date')->nullable();
            $table->string('wa_number')->nullable();
            $table->string('last_education')->nullable();
            $table->string('field');
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('city_id')->nullable();
            $table->string('prov_id')->nullable();
            $table->string('from_where')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
