<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMeasuresOfMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('measures_of_materials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->foreign('materials_id', 'materials_fk')->references('id')->on('materials')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('measures_id', 'materials_measures')->references('id')->on('measures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('measures_of_materials', function (Blueprint $table) {
            $table->dropForeign('materials_fk');
            $table->dropForeign('materials_measures');
        });
    }
}
