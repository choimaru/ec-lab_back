<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("general_codes")->insert([
            $this->make("post", "100", 1, "なし"),
            $this->make("post", "200", 2, "主任"),
            $this->make("post", "201", 3, "係長"),
            $this->make("post", "202", 4, "課長"),
            $this->make("post", "203", 5, "部長"),
            $this->make("authority", "system", 1, "システム管理者", "全ての機能とデータにアクセスできる。"),
            $this->make("authority", "hr", 2, "人事", "人事データの管理、従業員情報の更新、給与情報の管理を行う。"),
            $this->make("authority", "general", 3, "一般", "業務上必要な機能とデータにアクセスし、利用できる。"),
            $this->make("authority", "readonly", 4, "閲覧専用", "データの閲覧のみが可能で、変更はできない。"),
            $this->make("authority", "business", 5, "業務管理者", "業務プロセスや業務データの管理を行う。"),
            $this->make("employment_status", "fulltime", 1, "正社員"),
            $this->make("employment_status", "contract", 2, "契約社員"),
            $this->make("employment_status", "entrusted", 3, "嘱託社員"),
            $this->make("employment_status", "temporary", 4, "派遣社員"),
            $this->make("employment_status", "seconded", 5, "出向社員"),
            $this->make("employment_status", "associate", 6, "準社員"),
            $this->make("employment_status", "parttime", 7, "パート"),
            $this->make("employment_status", "casual", 8, "アルバイト"),
            $this->make("employment_status", "bp", 9, "BP"),
            $this->make("incumbency_status", "employed", 1, "在職中"),
            $this->make("incumbency_status", "retired", 9, "退職"),
            $this->make("retirement_status", "0", 1, "自己都合退職"),
            $this->make("retirement_status", "1", 2, "契約期間満了"),
            $this->make("retirement_status", "2", 3, "定年退職"),
            $this->make("retirement_status", "3", 4, "早期退職"),
            $this->make("retirement_status", "4", 5, "解雇"),
            $this->make("retirement_status", "5", 6, "会社都合"),
            $this->make("retirement_status", "6", 7, "その他"),
        ]);
    }

    private function make($category, $code, $sort_key, $name, $description = null)
    {
        $dt = new DateTime();
        return [
            "category" => $category,
            "code" => $code,
            "name" => $name,
            "description" => $description,
            "sort_key" => $sort_key,
            "created_at" => $dt,
            "updated_at" => $dt,
        ];
    }
}
