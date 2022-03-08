<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHssCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hss_commands', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable()->default(null);;
            $table->string('source')->nullable()->default(null);
            $table->text('api_path')->nullable()->default(null);
            $table->text('file_path')->nullable()->default(null);
            $table->text('command')->nullable()->default(null);
            $table->tinyInteger('is_uhc')->nullable()->default(null);
            $table->tinyInteger('is_mch')->nullable()->default(null);
            $table->tinyInteger('is_dh')->nullable()->default(null);
            $table->tinyInteger('is_sp')->nullable()->default(null);
            $table->string('period')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hss_commands');
    }
}
