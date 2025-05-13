<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('courier_status_histories', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }

    public function up()
{
    Schema::create('courier_status_histories', function (Blueprint $table) {
        $table->id();
        $table->foreignId('courier_id')->constrained('couriers')->onDelete('cascade');
        $table->string('status'); // e.g. Picked, In Transit, Delivered
        $table->text('notes')->nullable();
        $table->timestamp('changed_at')->useCurrent();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courier_status_histories');
    }
};
