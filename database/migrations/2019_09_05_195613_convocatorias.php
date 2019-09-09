    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Convocatorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('id_Administrador');
            $table->integer('periodo');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('numero_cupos_almuerzos');
            $table->integer('numero_cupos_refrigerios');
            $table->integer('idConvocatoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convocatorias');
    }
}
