<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100)->nullable();
            $table->string('model', 50)->nullable();
            $table->string('maker', 50);
            $table->string('color', 50);
            $table->tinyInteger('weight');
            $table->tinyInteger('hight');
            $table->tinyInteger('broad');
            $table->string('resolution', 50);
            $table->tinyInteger('usbNumber');
            $table->string('platform', 50);
            $table->string('so', 50);
            $table->text('description')->nullable();
            $table->string('commentary', 50);
            $table->tinyInteger('avaible')->default(1);
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
        Schema::dropIfExists('keyboards');
    }
}
