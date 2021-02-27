<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100);
            $table->string('subtitle', 250)->nullable();
            $table->string('cover')->nullable();

            $table->string('url')->nullable();
            $table->string('slug')->nullable();

            $table->string('status_cd')->default('10'); // B02

            $table->unsignedBigInteger('collection_id')->nullable();
            $table->text('body')->nullable();

            // ui configs
            $table->boolean('ui_show_page_title')->default(true);
            $table->string('ui_layout')->default('container-fluid'); // E01
            $table->string('ui_grid_columns')->default('grid-4-columns'); // E02

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
        Schema::dropIfExists('pages');
    }
}
