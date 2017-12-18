<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRole Model
 *
 * @property \App\Model\Table\UserAuthTable|\Cake\ORM\Association\BelongsTo $UserAuth
 * @property \App\Model\Table\RoleMasterTable|\Cake\ORM\Association\BelongsTo $RoleMaster
 *
 * @method \App\Model\Entity\UserRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRole findOrCreate($search, callable $callback = null, $options = [])
 */
class UserRoleTable extends Table
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

        $this->setTable('user_role');
        $this->setDisplayField('role_sl_no');
        $this->setPrimaryKey('role_sl_no');

        $this->belongsTo('UserAuth', [
            'foreignKey' => 'auth_user_id'
        ]);
        $this->belongsTo('RoleMaster', [
            'foreignKey' => 'role_id'
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
            ->boolean('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->decimal('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('created_date')
            ->requirePresence('created_date', 'create')
            ->notEmpty('created_date');

        $validator
            ->decimal('modified_by')
            ->allowEmpty('modified_by');

        $validator
            ->dateTime('modified_date')
            ->allowEmpty('modified_date');

        $validator
            ->integer('role_sl_no')
            ->allowEmpty('role_sl_no', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['auth_user_id'], 'UserAuth'));
        $rules->add($rules->existsIn(['role_id'], 'RoleMaster'));

        return $rules;
    }
}
