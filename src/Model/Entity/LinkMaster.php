<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LinkMaster Entity
 *
 * @property int $id
 * @property string $link_url
 * @property string $link_name
 * @property \Cake\I18n\FrozenTime $created_at
 * @property float $created_by
 * @property bool $is_active
 * @property int $application_id
 * @property string $link_description
 * @property int $parent_link_id
 * @property int $link_type
 * @property float $order_id
 *
 * @property \App\Model\Entity\ApplicationMaster $application_master
 * @property \App\Model\Entity\LinkMaster $link_master
 * @property \App\Model\Entity\Order $order
 */
class LinkMaster extends Entity
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
        'link_url' => true,
        'link_name' => true,
        'created_at' => true,
        'created_by' => true,
        'is_active' => true,
        'application_id' => true,
        'link_description' => true,
        'parent_link_id' => true,
        'link_type' => true,
        'order_id' => true,
        'application_master' => true,
        'link_master' => true,
        'order' => true
    ];
}
