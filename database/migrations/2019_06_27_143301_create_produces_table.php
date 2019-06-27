<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('produces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50)->unique();
            $table->String('descricao', 250)->nullable();
            $table->double('peso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produces');
    }
}
