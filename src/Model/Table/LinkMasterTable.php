<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LinkMaster Model
 *
 * @property \App\Model\Table\ApplicationMasterTable|\Cake\ORM\Association\BelongsTo $ApplicationMaster
 * @property \App\Model\Table\LinkMasterTable|\Cake\ORM\Association\BelongsTo $LinkMaster
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\LinkMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\LinkMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LinkMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LinkMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LinkMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LinkMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LinkMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class LinkMasterTable extends Table
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

        $this->setTable('link_master');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ApplicationMaster', [
            'foreignKey' => 'application_id'
        ]);
        $this->belongsTo('LinkMaster', [
            'foreignKey' => 'parent_link_id'
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

        // $validator
        //     ->scalar('link_url')
        //     ->allowEmpty('link_url');
        //
        // $validator
        //     ->scalar('link_name')
        //     ->allowEmpty('link_name');
        // //
        // $validator
        //     ->dateTime('created_at')
        //     ->requirePresence('created_at', 'create')
        //     ->notEmpty('created_at');
        //
        // $validator
        //     ->decimal('created_by')
        //     ->allowEmpty('created_by');
        //
        // $validator
        //     ->boolean('is_active')
        //     ->allowEmpty('is_active');
        //
        // $validator
        //     ->scalar('link_description')
        //     ->maxLength('link_description', 200)
        //     ->allowEmpty('link_description');
        //
        // $validator
        //     ->allowEmpty('link_type');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
  /*  public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['application_id'], 'ApplicationMaster'));
        $rules->add($rules->existsIn(['parent_link_id'], 'LinkMaster'));
        return $rules;
    }*/
}
