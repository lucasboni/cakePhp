<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 */
class CustomersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('customers');
        $this->setDisplayField('CustomerID');
        $this->setPrimaryKey('CustomerID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('CustomerID')
            ->allowEmptyString('CustomerID', 'create');

        $validator
            ->scalar('CustomerName')
            ->maxLength('CustomerName', 255)
            ->allowEmptyString('CustomerName');

        $validator
            ->scalar('ContactName')
            ->maxLength('ContactName', 255)
            ->allowEmptyString('ContactName');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 255)
            ->allowEmptyString('Address');

        $validator
            ->scalar('City')
            ->maxLength('City', 255)
            ->allowEmptyString('City');

        $validator
            ->scalar('PostalCode')
            ->maxLength('PostalCode', 255)
            ->allowEmptyString('PostalCode');

        $validator
            ->scalar('Country')
            ->maxLength('Country', 255)
            ->allowEmptyString('Country');

        return $validator;
    }
}
