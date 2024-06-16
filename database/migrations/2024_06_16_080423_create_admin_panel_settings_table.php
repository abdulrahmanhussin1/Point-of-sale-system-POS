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
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();

            $table->string('system_name',100);
            $table->string('system_logo');
            $table->string('system_phone',100);
            $table->string('system_address',250);
            $table->string('general_alert',250);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->foreignId('company_id')->constrained('companies')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignId('created_by')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('updated_by')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('deleted_by')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('opened_by')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamp('opened_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_panel_settings');
    }
};
