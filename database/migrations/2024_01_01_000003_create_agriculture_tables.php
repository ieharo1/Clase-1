<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('area', 10, 2);
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('crops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species')->nullable();
            $table->integer('growth_days');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plot_id')->constrained()->onDelete('cascade');
            $table->foreignId('crop_id')->constrained()->onDelete('cascade');
            $table->date('planting_date');
            $table->date('expected_harvest_date')->nullable();
            $table->date('harvest_date')->nullable();
            $table->enum('status', ['active', 'harvested', 'lost'])->default('active');
            $table->enum('health', ['excellent', 'good', 'fair', 'poor'])->default('good');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('irrigations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plot_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('water_amount', 10, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('fertilizer_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plot_id')->constrained()->onDelete('cascade');
            $table->foreignId('fertilizer_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('pests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('severity')->nullable();
            $table->text('treatment')->nullable();
            $table->timestamps();
        });

        Schema::create('pest_detections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plant_id')->constrained()->onDelete('cascade');
            $table->foreignId('pest_id')->constrained()->onDelete('cascade');
            $table->date('detection_date');
            $table->boolean('treated')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::create('weather_records', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('temperature', 5, 2);
            $table->decimal('humidity', 5, 2);
            $table->decimal('rainfall', 5, 2)->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weather_records');
        Schema::dropIfExists('pest_detections');
        Schema::dropIfExists('pests');
        Schema::dropIfExists('fertilizer_applications');
        Schema::dropIfExists('fertilizers');
        Schema::dropIfExists('irrigations');
        Schema::dropIfExists('plants');
        Schema::dropIfExists('crops');
        Schema::dropIfExists('plots');
    }
};
