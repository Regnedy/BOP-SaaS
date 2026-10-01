<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sync_queues', function (Blueprint $table) {
            $table->id();

            $table->uuid('uuid')->unique();

            $table->string('entity_type');
            $table->unsignedBigInteger('entity_id')->nullable();

            $table->enum('action', [
                'create',
                'update',
                'delete'
            ]);

            $table->json('payload')->nullable();

            $table->enum('status', [
                'pending',
                'processing',
                'completed',
                'failed'
            ])->default('pending');

            $table->integer('attempts')->default(0);

            $table->timestamp('synced_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sync_queues');
    }
};