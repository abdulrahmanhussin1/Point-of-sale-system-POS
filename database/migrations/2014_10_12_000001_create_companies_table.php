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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',100);
            $table->string('company_email',100);
            $table->string('company_phone',100);
            $table->string('company_address');
            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->foreignId('created_by')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('deleted_by')->nullable()->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('opened_by')->nullable()->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamp('opened_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
