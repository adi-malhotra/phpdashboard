<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoleMaster Entity
 *
 * @property string $role_desc
 * @property bool $is_active
 * @property float $created_by
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property float $modified_by
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property int $role_id
 *
 * @property \App\Model\Entity\Role $role
 */
class RoleMaster extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'role_desc' => true,
        'is_active' => true,
        'created_by' => true,
        'creation_date' => true,
        'modified_by' => true,
        'modified_date' => true,
        'role' => true
    ];
}
