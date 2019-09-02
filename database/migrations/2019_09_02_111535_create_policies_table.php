<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('idpolicies');
            $table->string('numb_policies');//Nomor Polis
            $table->string('numb_applications');//Nomor Aplikasi
            $table->string('name');//Nama
            $table->string('trees');//Cabang
            $table->string('age');//Usia
            $table->string('exp');//Jangka Waktu
            $table->string('price');//Harga Bangunan
            $table->string('type');//Tipe Bangunan
            $table->string('premi');//Premi
            $table->softDeletes();
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
        Schema::dropIfExists('policies');
    }
}
