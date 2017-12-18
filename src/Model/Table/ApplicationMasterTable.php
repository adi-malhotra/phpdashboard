<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ApplicationMaster Model
 *
 * @property \App\Model\Table\ApplicationsTable|\Cake\ORM\Association\BelongsTo $Applications
 *
 * @method \App\Model\Entity\ApplicationMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApplicationMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ApplicationMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class ApplicationMasterTable extends Table
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

        $this->setTable('application_master');
        $this->setDisplayField('application_id');
        $this->setPrimaryKey('application_id');

        $this->belongsTo('Applications', [
            'foreignKey' => 'application_id',
            'joinType' => 'INNER'
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
            ->scalar('application_name')
            ->maxLength('application_name', 250)
            ->requirePresence('application_name', 'create')
            ->notEmpty('application_name');

        $validator
            ->boolean('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

       /* $validator
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

        $validator
            ->scalar('description')
            ->maxLength('description', 254)
            ->allowEmpty('description');*/

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
   /* public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['application_id'], 'Applications'));

        return $rules;
    }*/
}
