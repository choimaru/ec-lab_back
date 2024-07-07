<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    public function getAllBooks()
    {
        $sql = <<<SQL
            Select
                m01.employee_cd
               ,m01.employee_name
               ,m01.kana
               ,m01.email
               ,m01.department_cd
               ,m02.name As post
               ,m03.name As authority
               ,m04.name As employment_status
               ,m05.name As incumbency_status
               ,m01.login_at
               ,m01.locked_at
            From
                employees m01
                    Left Join general_codes m02
                        On m01.post = m02.code
                        And m02.category = 'post'
                    Left Join general_codes m03
                        On m01.authority = m03.code
                        And m03.category = 'authority'
                    Left Join general_codes m04
                        On m01.employment_status = m04.code
                        And m04.category = 'employment_status'
                    Left Join general_codes m05
                        On m01.incumbency_status = m05.code
                        And m05.category = 'incumbency_status'
            Order By
                m01.employee_cd
            ;
SQL;

        return DB::select($sql);
    }
}
