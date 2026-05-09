<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {

            $table->id();

            // BASIC
            $table->string('title');
            $table->string('slug')->unique();

            $table->longText('description')->nullable();

            // MEDIA
            $table->string('thumbnail')->nullable();

            // EVENT TYPE
            $table->string('event_type'); // webinar, workshop, mentoring

            // DELIVERY
            $table->string('delivery_type'); // online, offline, hybrid

            // ONLINE
            $table->string('meeting_url')->nullable();

            // OFFLINE
            $table->text('location')->nullable();
            $table->string('city')->nullable();

            // RECORDING
            $table->string('recording_url')->nullable();

            // TIME
            $table->dateTime('start_time');
            $table->dateTime('end_time');

            $table->string('timezone')->default('WIB');

            // INSTRUCTOR
            $table->foreignId('instructor_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // CAPACITY
            $table->integer('capacity')->nullable();

            // PAYMENT
            $table->boolean('is_paid')->default(false);

            $table->decimal('price', 10, 2)
                ->nullable();

            // STATUS
            $table->string('status')
                ->default('draft');
            // draft/upcoming/live/ended

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
