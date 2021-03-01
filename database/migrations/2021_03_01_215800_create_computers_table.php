<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100)->nullable();
            $table->string('model', 50)->nullable();
            $table->string('processor', 50)->nullable();
            $table->tinyInteger('sizeRam');
            $table->tinyInteger('capacityHDD');
            $table->tinyInteger('weight');
            $table->string('color', 50);
            $table->tinyInteger('sizeScreen');
            $table->text('description')->nullable();
            $table->tinyInteger('usbNumber');
            $table->string('commentary', 100)->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('computers');
    }
}
