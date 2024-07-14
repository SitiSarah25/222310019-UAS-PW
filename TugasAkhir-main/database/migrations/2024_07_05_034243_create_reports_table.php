<?php

/**
 * Run the migrations.
 */
// public function up(): void
// {
//     Schema::create('reports', function (Blueprint $table) {
//         $table->id();
//         $table->unsignedBigInteger('user_id');
//         $table->timestamp('tanggal_waktu');
//         $table->string('latitute',100);
//         $table->string('longtitute',100);
//         $table->timestamps();

//         $table->foreignId('id_pengguna')->constrained('users', 'id_pengguna');
//         $table->foreignId('id_kategori_bencana')->constrained('categories', 'id_kategori_bencana');
//     });
// }

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disaster_id');
            $table->foreignId('province_id');
            $table->foreignId('city_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
