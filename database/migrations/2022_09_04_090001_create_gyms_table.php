<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('post_code');
            $table->foreignId('prefecture_id')->constrained();
            $table->string('city');
            $table->string('block');
            $table->string('building')->nullable();
            $table->decimal('lat', $precision = 17, $scale = 14);
            $table->decimal('long', $precision = 17, $scale = 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gyms');
    }
};
