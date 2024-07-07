<?php

namespace App\Services;

use App\Models\GeneralCode;

class GeneralCodeService
{
    protected $GeneralCodeModel;

    public function __construct(GeneralCode $GeneralCodeModel)
    {
        $this->GeneralCodeModel = $GeneralCodeModel;
    }

    public function getGeneralCodeList()
    {
        $list = [];

        $GeneralCodes = $this->GeneralCodeModel->getAllBooks();
        foreach ($GeneralCodes as $GeneralCode) {
            $wk["GeneralCode_cd"] = $GeneralCode->GeneralCode_cd;
            $wk["GeneralCode_name"] = $GeneralCode->GeneralCode_name;
            $wk["kana"] = $GeneralCode->kana;
            $wk["email"] = $GeneralCode->email;
            $wk["department_cd"] = $GeneralCode->department_cd;
            $wk["post"] = $GeneralCode->post;
            $wk["authority"] = $GeneralCode->authority;
            $wk["employment_status"] = $GeneralCode->employment_status;
            $wk["incumbency_status"] = $GeneralCode->incumbency_status;
            $wk["login_at"] = $GeneralCode->login_at;
            $wk["locked_at"] = $GeneralCode->locked_at;
            $list[] = $wk;
        }

        return $GeneralCodes;
    }
}
