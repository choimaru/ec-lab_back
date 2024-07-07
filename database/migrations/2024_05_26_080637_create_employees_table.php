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
        Schema::create('employees', function (Blueprint $table) {
            $table->string("employee_cd", 8)->primary()->comment("社員コード");
            $table->string("employee_name", 60)->comment("社員名");
            $table->string("kana", 60)->comment("ふりがな");
            $table->string("email", 150)->comment("メールアドレス");
            $table->string("password", 255)->comment("パスワード");
            $table->string("tel", 15)->nullable()->comment("連絡先");
            $table->string("department_cd", 20)->nullable()->comment("所属部門コード");
            $table->string("post", 50)->nullable()->comment("役職");
            $table->string("authority", 50)->nullable()->comment("権限");
            $table->string("employment_status", 50)->nullable()->comment("雇用形態");
            $table->string("incumbency_status", 50)->nullable()->comment("在職区分");
            $table->timestamp("login_at")->nullable()->comment("ログイン日時");
            $table->tinyInteger("failure_count")->nullable()->comment("ログイン失敗回数");
            $table->timestamp("locked_at")->nullable()->comment("ロック日時");
            $table->string("created_employee", 20)->nullable()->comment("作成者");
            $table->timestamp("created_at")->nullable()->comment("作成日");
            $table->string("updated_employee", 20)->nullable()->comment("更新者");
            $table->timestamp("updated_at")->nullable()->comment("更新日");
        });
        DB::statement("Alter Table employees Comment '社員マスタ'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
