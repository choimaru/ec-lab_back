<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_codes', function (Blueprint $table) {
            $table->bigIncrements("id")->comment("ID");
            $table->string("category", 50)->comment("カテゴリ");
            $table->string("code", 50)->comment("コード");
            $table->string("name", 100)->comment("コードの名称");
            $table->integer("sort_key")->nullable()->comment("ソートキー");
            $table->string("description", 255)->comment("説明");
            $table->timestamps();
            $table->unique(["category", "code"]);
        });
        DB::statement("Alter Table general_codes Comment '汎用コードマスタ'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_codes');
    }
};
