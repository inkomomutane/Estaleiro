<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsMedidasProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials_medidas_projects', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('project_id')->nullable()->index('fk_projects_has_materials_medidas_projects1_idx');
            $table->bigInteger('material_medida_id')->nullable()->index('fk_projects_has_materials_medidas_materials_medidas1_idx');
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
        Schema::dropIfExists('materials_medidas_projects');
    }
}
