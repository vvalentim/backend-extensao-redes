<?php

use App\Models\Project;
use App\Models\Room;
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
        Schema::create('test_entries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->decimal('signal_strength_2g');
            $table->decimal('signal_strength_5g');
            $table->decimal('speed_2g');
            $table->decimal('speed_5g');
            $table->decimal('interference');

            $table->foreignIdFor(Room::class)
                ->constrained(table: 'rooms')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_entries');
    }
};
