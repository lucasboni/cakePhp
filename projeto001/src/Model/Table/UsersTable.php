<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table {
    
    public function initialize(array $config) {
      parent::initialize($config);   
      
      $this->setTable('users');
      $this->addBehavior('Timestamp');//para adicionar o timestamp automaticamente no created
    }
    
    
    public function validationDefault(Validator $validator) {
        $validator
           ->integer('id')
           ->allowEmptyString('id','create');
        
       $validator
           ->scalar('nome')
           ->maxLength('nome', 220)
           ->requirePresence('nome','create')
           ->notBlank('nome','nesserário preencher o campo nome');
       
       $validator
           ->scalar('email')
           ->maxLength('email', 220)
           //->requirePresence('email','create')
       ->notBlank('email','nesserário preencher o campo email');
       
           
       return  $validator;
    }
}