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
            $table->string('subtitle', 250);
            $table->string('cover')->nullable();

            $table->string('url')->nullable();
            $table->string('slug')->nullable();

            $table->string('type_cd')->default('static'); // B01
            $table->string('status_cd')->default('10'); // B02

            $table->unsignedBigInteger('collection_id')->nullable();
            $table->text('body')->nullable();

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
