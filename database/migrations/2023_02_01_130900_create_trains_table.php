<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table ->string('train_code', 10) -> nullable(false) -> unique();
            $table ->string('departing_from', 20) -> nullable(false);
            $table ->string('departing_to' , 20) -> nullable(false);
            $table ->smallInteger('binary') -> nullable(false)->unsigned();
            $table ->dateTime('departing_date') -> nullable(false);
            $table ->smallInteger('wagons');
            
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
        Schema::dropIfExists('trains');
    }
};
