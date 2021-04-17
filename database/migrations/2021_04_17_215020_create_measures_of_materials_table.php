<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasuresOfMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures_of_materials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('measures_id')->index('measures_idx');
            $table->unsignedBigInteger('materials_id')->index('materials_idx');
            $table->double('price')->nullable();
            $table->string('description')->nullable();
            $table->double('quantity_by_base_unity')->nullable();
            $table->double('profit')->nullable();
            $table->timestamps();
            $table->bigIncrements('id');
            $table->double('discount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measures_of_materials');
    }
}
