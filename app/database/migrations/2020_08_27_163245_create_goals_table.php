<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoalsTable extends Migration {
    public function up() {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('group_id')
                ->constrained();

            $table->date('at');
            $table->double('limit');

            $table->unique(['group_id', 'at']);
        });
    }

    public function down() {
        Schema::dropIfExists('goals');
    }
}
