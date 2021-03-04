<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100)->nullable();
            $table->string('model', 50)->nullable();
            $table->tinyInteger('coreNumber');
            $table->tinyInteger('threadsNumber');
            $table->tinyInteger('speedMax');
            $table->tinyInteger('speedBase');
            $table->string('thermal', 50);
            $table->tinyInteger('cache1');
            $table->tinyInteger('cache2');
            $table->tinyInteger('cache3');
            $table->tinyInteger('temperature');
            $table->string('package', 50);
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
        Schema::dropIfExists('processors');
    }
}
