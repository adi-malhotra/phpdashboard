<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRole Entity
 *
 * @property int $auth_user_id
 * @property int $role_id
 * @property bool $is_active
 * @property float $created_by
 * @property \Cake\I18n\FrozenTime $created_date
 * @property float $modified_by
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property int $role_sl_no
 *
 * @property \App\Model\Entity\UserAuth $user_auth
 * @property \App\Model\Entity\RoleMaster $role_master
 */
class UserRole extends Entity
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
        'auth_user_id' => true,
        'role_id' => true,
        'is_active' => true,
        'created_by' => true,
        'created_date' => true,
        'modified_by' => true,
        'modified_date' => true,
        'user_auth' => true,
        'role_master' => true
    ];
}
