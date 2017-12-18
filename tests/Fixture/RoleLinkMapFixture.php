<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoleLinkMapFixture
 *
 */
class RoleLinkMapFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'role_link_map';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'link_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'role_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'is_active' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'role_link_map_link_id_fkey' => ['type' => 'foreign', 'columns' => ['link_id'], 'references' => ['link_master', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'role_link_map_role_id_fkey' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['role_master', 'role_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'link_id' => 1,
            'role_id' => 1,
            'is_active' => 1
        ],
    ];
}
