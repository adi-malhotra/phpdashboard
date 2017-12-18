<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoleLinkMap Model
 *
 * @property \App\Model\Table\LinkMasterTable|\Cake\ORM\Association\BelongsTo $LinkMaster
 * @property \App\Model\Table\RoleMasterTable|\Cake\ORM\Association\BelongsTo $RoleMaster
 *
 * @method \App\Model\Entity\RoleLinkMap get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoleLinkMap newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoleLinkMap[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoleLinkMap|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoleLinkMap patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoleLinkMap[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoleLinkMap findOrCreate($search, callable $callback = null, $options = [])
 */
class RoleLinkMapTable extends Table
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

        $this->setTable('role_link_map');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('LinkMaster', [
            'foreignKey' => 'link_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->boolean('is_active')
            ->allowEmpty('is_active');

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
        $rules->add($rules->existsIn(['link_id'], 'LinkMaster'));
        $rules->add($rules->existsIn(['role_id'], 'RoleMaster'));

        return $rules;
    }*/
}
