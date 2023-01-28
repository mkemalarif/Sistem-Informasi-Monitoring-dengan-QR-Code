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
        Schema::create('status_cucians', function (Blueprint $table) {
            $table->bigIncrements("noTransaksi");
            $table->string("nama");
            $table->foreignId("category_id");
            $table->foreignId("status_id");
            $table->integer("beratCucian");
            $table->bigInteger("totalHarga")->nullable();
            $table->enum("pembayaran", ["Lunas", "Belum Lunas"]);
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
        Schema::dropIfExists('status_cucians');
    }
};
