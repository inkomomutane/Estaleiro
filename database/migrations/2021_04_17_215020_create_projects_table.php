<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->double('deposited_amount')->nullable();
            $table->double('available_amount')->nullable();
            $table->double('missing_amount')->nullable();
            $table->double('progress_percent')->nullable();
            $table->integer('total_materials')->nullable();
            $table->double('total_paid')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id')->index('clients_idx');
            $table->unsignedBigInteger('status_id')->index('statuses_of_project_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
