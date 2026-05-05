<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();

            // 🔗 Relasi ke course
            $table->foreignId('course_id')
                ->constrained()
                ->cascadeOnDelete();

            // 🧠 Nama module
            $table->string('title');

            // 📊 Urutan module
            $table->integer('order')->default(0);

            // 📝 Optional (boleh dipakai atau tidak)
            $table->text('description')->nullable();

            // 🔘 Optional publish
            $table->boolean('is_published')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
