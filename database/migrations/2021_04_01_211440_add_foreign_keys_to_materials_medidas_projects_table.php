<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterialsMedidasProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials_medidas_projects', function (Blueprint $table) {
            $table->foreign('material_medida_id', 'fk_projects_has_materials_medidas_materials_medidas1')->references('id')->on('materials_medidas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('project_id', 'fk_projects_has_materials_medidas_projects1')->references('id')->on('projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials_medidas_projects', function (Blueprint $table) {
            $table->dropForeign('fk_projects_has_materials_medidas_materials_medidas1');
            $table->dropForeign('fk_projects_has_materials_medidas_projects1');
        });
    }
}
