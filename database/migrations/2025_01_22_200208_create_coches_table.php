<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->integer('anyo');
            $table->string('matricula')->unique();
            $table->double('precio');
            $table->timestamps();
        });

        // Insertar datos automáticamente al migrar
        DB::table('coches')->insert([
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'color' => 'Rojo',
                'anyo' => 2022,
                'matricula' => '1234ABC',
                'precio' => 18000.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'color' => 'Azul',
                'anyo' => 2021,
                'matricula' => '5678DEF',
                'precio' => 20000.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'color' => 'Negro',
                'anyo' => 2020,
                'matricula' => '9101GHI',
                'precio' => 17500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
