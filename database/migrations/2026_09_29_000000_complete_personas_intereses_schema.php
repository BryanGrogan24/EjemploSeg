<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('interes') && ! Schema::hasTable('intereses')) {
            Schema::rename('interes', 'intereses');
        }

        Schema::table('personas', function (Blueprint $table) {
            if (! Schema::hasColumn('personas', 'nombre')) {
                $table->string('nombre')->after('id');
            }

            if (! Schema::hasColumn('personas', 'email')) {
                $table->string('email')->unique()->after('nombre');
            }
        });

        Schema::table('intereses', function (Blueprint $table) {
            if (! Schema::hasColumn('intereses', 'nombre')) {
                $table->string('nombre')->after('id');
            }

            if (! Schema::hasColumn('intereses', 'descripcion')) {
                $table->string('descripcion')->nullable()->after('nombre');
            }
        });

        if (! Schema::hasColumn('interes_persona', 'persona_id')) {
            Schema::table('interes_persona', function (Blueprint $table) {
                $table->foreignId('persona_id')->after('id')->constrained()->cascadeOnDelete();
                $table->foreignId('interes_id')->after('persona_id')->constrained('intereses')->cascadeOnDelete();
                $table->unique(['persona_id', 'interes_id']);
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('interes_persona', 'persona_id')) {
            Schema::table('interes_persona', function (Blueprint $table) {
                $table->dropUnique(['persona_id', 'interes_id']);
                $table->dropConstrainedForeignId('persona_id');
                $table->dropConstrainedForeignId('interes_id');
            });
        }

        Schema::table('personas', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'email']);
        });

        Schema::table('intereses', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'descripcion']);
        });
    }
};
