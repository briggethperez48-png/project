<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $datoE) {
            $datoE->id();
            $datoE->unsignedBigInteger('user_id');
            $datoE->string('pregunta1');
            $datoE->string('pregunta2');
            $datoE->string('pregunta3');
            $datoE->text('sugerencias')
                ->nullable();
            $datoE->string('folio');
            $datoE->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuestas');
    }
}
