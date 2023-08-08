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
        Schema::create('seoproperties', function (Blueprint $table) {
            $table->id();
            $table->enum('pagename',['home','resume','projets','contact']);
            $table->string('title',50);
            $table->text('keywords',500);
            $table->longText('description',500);
            $table->string('ogSiteName',100);
            $table->string('ogUrl',100);
            $table->string('ogTitle',100);
            $table->longText('ogDescription',500);
            $table->string('ogImage',100);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seoproperties');
    }
};
