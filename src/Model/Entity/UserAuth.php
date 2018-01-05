<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserAuth Entity
 *
 * @property string $login_id
 * @property string $password
 * @property int $emp_code
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $created_date
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property \Cake\I18n\FrozenTime $from_date
 * @property \Cake\I18n\FrozenTime $to_date
 * @property bool $is_active
 * @property bool $is_admin
 * @property int $session_token
 * @property int $org_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Login $login
 * @property \App\Model\Entity\Org $org
 * @property \App\Model\Entity\User $user
 */
class UserAuth extends Entity
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
        'login_id' => true,
        'password' => true,
        'emp_code' => true,
        'created_by' => true,
        'created_date' => true,
        'modified_by' => true,
        'modified_date' => true,
        'from_date' => true,
        'to_date' => true,
        'is_active' => true,
        'is_admin' => true,
        'session_token' => true,
        'org_id' => true,
        'login' => true,
        'user_role'=>true,
        'org' => true,
        'user' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
