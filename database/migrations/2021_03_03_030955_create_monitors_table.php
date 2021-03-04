<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100)->nullable();
            $table->string('model', 50)->nullable();
            $table->tinyInteger('inches')->nullable();
            $table->tinyInteger('usbNumber');
            $table->tinyInteger('vgaNumber');
            $table->tinyInteger('hdmiNumber');
            $table->string('color', 50);
            $table->string('typeHD', 50);
            $table->string('timeAnswer', 50);
            $table->string('speed', 50);
            $table->string('speakers', 50);
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
        Schema::dropIfExists('monitors');
    }
}
