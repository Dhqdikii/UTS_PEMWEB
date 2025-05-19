<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('gurus', function (Blueprint $table) {
            $table->id();                                  
            $table->string('nama');                         
            $table->string('nip')->unique();            
            $table->string('email')->unique();            
            $table->string('no_hp')->nullable();           
            $table->text('alamat');                       
            $table->string('mapel');                        
            $table->enum('status', ['Aktif', 'Nonaktif'])   
                  ->default('Aktif');
            $table->string('image')->nullable();            
            $table->timestamps();                          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
