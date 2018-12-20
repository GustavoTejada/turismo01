<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lenders Model
 *
 * @property \App\Model\Table\ReservationsTable|\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Lender get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lender newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lender[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lender|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lender|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lender patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lender[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lender findOrCreate($search, callable $callback = null, $options = [])
 */
class LendersTable extends Table
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

        $this->setTable('lenders');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Reservations', [
            'foreignKey' => 'lender_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 100)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('country')
            ->maxLength('country', 100)
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 100)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->time('open_time')
            ->requirePresence('open_time', 'create')
            ->notEmpty('open_time');

        $validator
            ->time('close_time')
            ->requirePresence('close_time', 'create')
            ->notEmpty('close_time');

        $validator
            ->scalar('rules')
            ->requirePresence('rules', 'create')
            ->notEmpty('rules');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
