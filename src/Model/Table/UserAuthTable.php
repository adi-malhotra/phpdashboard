<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DigestAuthenticate;

/**
 * UserAuth Model
 *
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 * @property \App\Model\Table\OrgsTable|\Cake\ORM\Association\BelongsTo $Orgs
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\UserAuth get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserAuth newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserAuth[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserAuth|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserAuth patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserAuth[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserAuth findOrCreate($search, callable $callback = null, $options = [])
 */
class UserAuthTable extends Table
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

        $this->setTable('user_auth');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        // $validator
        //     ->scalar('password')
        //     ->maxLength('password', 255)
        //     ->allowEmpty('password');
        //
        // $validator
        //     ->allowEmpty('emp_code');
        //
        // $validator
        //     ->allowEmpty('created_by');
        //
        // $validator
        //     ->dateTime('created_date')
        //     ->allowEmpty('created_date');
        //
        // $validator
        //     ->allowEmpty('modified_by');
        //
        // $validator
        //     ->dateTime('modified_date')
        //     ->allowEmpty('modified_date');
        //
        // $validator
        //     ->dateTime('from_date')
        //     ->allowEmpty('from_date');
        //
        // $validator
        //     ->dateTime('to_date')
        //     ->allowEmpty('to_date');
        //
        // $validator
        //     ->boolean('is_active')
        //     ->allowEmpty('is_active');
        //
        // $validator
        //     ->boolean('is_admin')
        //     ->allowEmpty('is_admin');
        //
        // $validator
        //     ->allowEmpty('session_token');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    /*public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['login_id'], 'Logins'));
        $rules->add($rules->existsIn(['org_id'], 'Orgs'));
        return $rules;
    }*/
}
