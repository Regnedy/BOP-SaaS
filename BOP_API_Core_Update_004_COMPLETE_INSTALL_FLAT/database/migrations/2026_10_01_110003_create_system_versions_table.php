<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration{
 public function up(): void{
  Schema::create('system_versions',function(Blueprint $table){
   $table->id();
   $table->string('platform');
   $table->string('version');
   $table->string('build')->nullable();
   $table->text('release_notes')->nullable();
   $table->boolean('required')->default(false);
   $table->timestamps();
  });
 }
 public function down(): void{Schema::dropIfExists('system_versions');}
};