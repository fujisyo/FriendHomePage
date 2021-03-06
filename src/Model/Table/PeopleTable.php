<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PeopleTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Boards');
    }

    public function validationDefault(Validator $validator)
    {
        $validator->integer('id');
        $validator->notEmpty('name');
        $validator->notEmpty('password');
        $validator->notEmpty('content');
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->isUnique(['name'], '既に登録済みです');
        return $rules;
    }

    public function checkNameAndPass($data) {
        $n = $this->find()
        ->where(['name'=>$data['name']])
        ->andWhere(['password' => $data['password']]) 
        ->count();

        return $n > 0 ? true : false; 
    }
}