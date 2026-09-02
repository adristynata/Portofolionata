<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role_title')->nullable()->default('Web Developer');
            $table->text('bio')->nullable();
            $table->string('education')->nullable()->default('Teknik Informatika / RPL');
            $table->string('focus')->nullable()->default('Web & Backend Dev');
            $table->string('phone')->nullable()->default('+62 89639685566');
            $table->string('location')->nullable()->default('Jepara');
            $table->string('photo')->nullable()->default('images/foto-saya.jpg');
            $table->string('github_url')->nullable()->default('https://github.com');
            $table->string('linkedin_url')->nullable()->default('https://linkedin.com');
            $table->string('instagram_url')->nullable()->default('https://instagram.com');
            $table->string('whatsapp_url')->nullable()->default('https://wa.me/6289639685566');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'role_title', 'bio', 'education', 'focus', 'phone', 
                'location', 'photo', 'github_url', 'linkedin_url', 
                'instagram_url', 'whatsapp_url'
            ]);
        });
    }
};
