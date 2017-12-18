<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoleMaster Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\RoleMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoleMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoleMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoleMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoleMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoleMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoleMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class RoleMasterTable extends Table
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

        $this->setTable('role_master');
        $this->setDisplayField('role_id');
        $this->setPrimaryKey('role_id');
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
            ->scalar('role_desc')
            ->maxLength('role_desc', 250)
            ->requirePresence('role_desc', 'create')
            ->notEmpty('role_desc');

        $validator
            ->boolean('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->decimal('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('creation_date')
            ->requirePresence('creation_date', 'create')
            ->notEmpty('creation_date');

        $validator
            ->decimal('modified_by')
            ->allowEmpty('modified_by');

        $validator
            ->dateTime('modified_date')
            ->allowEmpty('modified_date');

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
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }*/
}
