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
            $table->bigInteger('id', true);
            $table->string('name')->nullable();
            $table->unsignedBigInteger('client_id')->index('fk_projects_users1_idx');
            $table->double('deposited_amount')->nullable();
            $table->double('available_amount')->nullable();
            $table->double('missing_amount')->nullable();
            $table->float('progress_percent', 10, 0)->nullable();
            $table->integer('total_materials')->nullable();
            $table->double('total_paid')->nullable();
            $table->bigInteger('status_id')->default(3)->index('fk_projects_statuses1_idx');
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
        Schema::dropIfExists('projects');
    }
}
