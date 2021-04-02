<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name')->nullable();
            $table->float('quantity', 10, 0)->nullable();
            $table->double('buy_price')->nullable();
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->tinyInteger('intern_material')->nullable();
            $table->bigInteger('medida_unity')->index('fk_materials_medidas1_idx');
            $table->timestamps();
            $table->bigInteger('category_id')->index('fk_materials_categories1_idx');
            $table->bigInteger('materials_id')->index('fk_materials_materials1_idx');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
