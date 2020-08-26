<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration {
    public function up() {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('group_id')
                ->constrained();

            $table->double('amount');
            $table->date('at');

            $table->string('description')
                ->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('entries');
    }
}
