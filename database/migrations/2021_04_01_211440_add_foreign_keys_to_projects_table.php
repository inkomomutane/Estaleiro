<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('status_id', 'fk_projects_statuses1')->references('id')->on('statuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('client_id', 'fk_projects_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('fk_projects_statuses1');
            $table->dropForeign('fk_projects_users1');
        });
    }
}
