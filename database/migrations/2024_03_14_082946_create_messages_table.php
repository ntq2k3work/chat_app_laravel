<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table -> foreignId('conversation_id') -> constrained();
            $table -> unsignedBigInteger('sender-id'); // có thể dùng uuid()
            $table -> foreign('sender-id') -> references('id') -> on('users');

            $table -> unsignedBigInteger('receiver-id');
            $table -> foreign('receiver-id') -> references('id') -> on('users');
            $table->timestamp('read-at') -> nullable();

            // action
            $table -> timestamp('receiver_deleted_at') -> nullable();
            $table -> timestamp('sender_deleted_at') -> nullable();

            $table -> text('body') -> nullable();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
