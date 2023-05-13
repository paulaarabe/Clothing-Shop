<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('style_id')->constrained();
            $table->string('name');
            $table->string('color_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
