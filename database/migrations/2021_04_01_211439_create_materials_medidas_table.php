<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials_medidas', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('medida_id')->nullable()->index('fk_medidas_has_materials_medidas1_idx');
            $table->bigInteger('material_id')->nullable()->index('fk_medidas_has_materials_materials1_idx');
            $table->float('price', 10, 0)->nullable();
            $table->string('description')->nullable();
            $table->float('quantity_by_base_unity', 10, 0)->nullable();
            $table->double('lucro')->nullable();
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
        Schema::dropIfExists('materials_medidas');
    }
}
