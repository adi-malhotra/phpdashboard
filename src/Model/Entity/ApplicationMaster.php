<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ApplicationMaster Entity
 *
 * @property int $application_id
 * @property string $application_name
 * @property bool $is_active
 * @property float $created_by
 * @property \Cake\I18n\FrozenTime $creation_date
 * @property float $modified_by
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property string $description
 *
 * @property \App\Model\Entity\Application $application
 */
class ApplicationMaster extends Entity
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
        'application_name' => true,
        'is_active' => true,
        'created_by' => true,
        'creation_date' => true,
        'quantity'=>true,
        'modified_by' => true,
        'modified_date' => true,
        'description' => true,
        'application' => true
    ];
}
