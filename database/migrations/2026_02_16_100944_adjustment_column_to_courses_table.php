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
        Schema::table('courses', function (Blueprint $table) {

            // DROP FK program_id dulu sebelum drop column
            $table->dropForeign(['program_id']);

            // rename kolom
            $table->renameColumn('name', 'title');
            $table->renameColumn('photo', 'thumbnail');

            // hapus kolom
            $table->dropColumn([
                'description',
                'content',
                'file',
                'program_id',
                'video'   // sekalian jika masih ada dari struktur lama
            ]);

            // // tambah kolom baru
            // $table->boolean('is_active')->default(true)->after('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {

            // balikin rename
            $table->renameColumn('title', 'name');
            $table->renameColumn('thumbnail', 'photo');

            // kembalikan kolom lama
            $table->text('description');
            $table->text('content');
            $table->string('file')->nullable();
            $table->string('video')->nullable();
            $table->foreignId('program_id')->constrained()->cascadeOnDelete();

            // hapus kolom baru
            $table->dropColumn('is_active');
        });
    }
};
