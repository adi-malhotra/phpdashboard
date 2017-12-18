<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoleLinkMap Entity
 *
 * @property int $id
 * @property int $link_id
 * @property int $role_id
 * @property bool $is_active
 *
 * @property \App\Model\Entity\LinkMaster $link_master
 * @property \App\Model\Entity\RoleMaster $role_master
 */
class RoleLinkMap extends Entity
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
        'link_id' => true,
        'role_id' => true,
        'is_active' => true,
        'link_master' => true,
        'role_master' => true
    ];
}
