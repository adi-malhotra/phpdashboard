<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LinkTypeMaster Model
 *
 * @method \App\Model\Entity\LinkTypeMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\LinkTypeMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LinkTypeMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LinkTypeMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LinkTypeMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LinkTypeMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LinkTypeMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class LinkTypeMasterTable extends Table
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

        $this->setTable('link_type_master');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('desc')
            ->maxLength('desc', 1)
            ->allowEmpty('desc');

        $validator
            ->boolean('is_active')
            ->allowEmpty('is_active');

        return $validator;
    }
}
