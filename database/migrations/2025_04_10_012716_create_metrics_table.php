<?php

use App\Models\User;
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
        Schema::create('calories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('calorie');
            $table->timestamps();
        });

        Schema::create('heights', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('height');
            $table->timestamps();
        });

        Schema::create('weights', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('weight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_metrics');
    }
};
