<?php 

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity {
    
    public $_accessible = [ //informa as colunas que vou pegar do banco de dados
        'id' => true,//true que dizer sim
        'nome' => true,
        'email' => true,
        'created' => true,
        'modified' => true
    ];
}


