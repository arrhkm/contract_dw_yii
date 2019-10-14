<?php
namespace app\commands;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\ArrayHelper;

class ListPerson
{
    public static function getListPerson(){
        $emp= \app\models\Employee::find()->with('person')->alias('p')->all();               
        $list = ArrayHelper::toArray($emp, [
            'app\models\Employee'=>[
                'id',
                'reg_number',
                'reg_plus'=>function($emp){
                    return $emp->reg_number." - ".$emp->person->name;
                },
            ]
        ]); 
        $list_emp = ArrayHelper::map($list, 'id', 'reg_plus');
        return $list_emp;
    }
}