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
        Schema::create("political_parties", function (Blueprint $table) {
            $table->id();
            $table->string("party")->unique();
            $table->foreignId("party_leader_id")->nullable()->constrained("users")->nullOnDelete()->cascadeOnUpdate();
            $table->string("party_image")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("political_parties");
    }
};
