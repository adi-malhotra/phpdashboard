<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemTypeMaster Entity
 *
 * @property int $item_type_id
 * @property string $item_type_desc
 *
 * @property \App\Model\Entity\ItemType $item_type
 */
class ItemTypeMaster extends Entity
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
        'item_type_desc' => true,
        'item_type' => true
    ];
}
