<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregationsTable extends Migration {
    public function up() {
        Schema::create('aggregations', function (Blueprint $table) {
            $table->foreignId('group_id')
                ->nullable()
                ->constrained();

            $table->date('at');
            $table->primary(['group_id', 'at']);

            $table->integer('items');
            $table->double('total');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('aggregations');
    }
}
