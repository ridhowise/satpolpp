<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('namaObjekWisata');
            $table->string('slugObjekWisata');
            $table->string('image');
            $table->longText('detailsObjekWisata');
            $table->timestamps();
        });
        Schema::table('objek_wisata', function (Blueprint $table) {
            $table->foreignId('layanan_id')->constrained('layanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objek_wisata');
    }
}
