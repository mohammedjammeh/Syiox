<?php

use App\Enums\ScaleStatus;
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
        $scaleStatuses = collect(ScaleStatus::cases())->pluck('value')->toArray();

        Schema::create('scales', function (Blueprint $table) use($scaleStatuses) {
            $table->id();
            $table->string('name');
            $table->string('external_id')->unique();
            $table->decimal('max_weight');
            $table->text('description')->nullable();
            $table->enum('status', $scaleStatuses)->default(ScaleStatus::EMPTY->value);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scales');
    }
};
