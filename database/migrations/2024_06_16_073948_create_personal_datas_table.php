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
        Schema::create('personal_datas', function (Blueprint $table) {
            $table->string("employee_cd", 20)->primary()->comment("社員コード");
            $table->tinyInteger("gender")->nullable()->comment("性別");
            $table->string("birthday", 10)->nullable()->comment("生年月日");
            $table->string("zip_code", 8)->nullable()->comment("郵便番号");
            $table->string("prefecture", 10)->nullable()->comment("都道府県");
            $table->string("address", 150)->nullable()->comment("住所");
            $table->string("building", 50)->nullable()->comment("建物");
            $table->string("email", 150)->nullable()->comment("メールアドレス");
            $table->string("tel", 15)->nullable()->comment("連絡先");
            $table->string("emergency_tel", 15)->nullable()->comment("緊急連絡先");
            $table->string("entry_date", 10)->nullable()->comment("入社日");
            $table->string("retirement_date", 10)->nullable()->comment("退職日");
            $table->tinyInteger("retirement_status")->nullable()->comment("退職区分");
            $table->string("created_employee", 20)->nullable()->comment("作成者");
            $table->timestamp("created_at")->nullable()->comment("作成日");
            $table->string("updated_employee", 20)->nullable()->comment("更新者");
            $table->timestamp("updated_at")->nullable()->comment("更新日");
        });
        DB::statement("Alter Table personal_datas Comment '個人情報'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_datas');
    }
};
