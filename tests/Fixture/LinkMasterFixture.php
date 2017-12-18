<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LinkMasterFixture
 *
 */
class LinkMasterFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'link_master';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'link_url' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'link_name' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'created_by' => ['type' => 'decimal', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'is_active' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => true, 'comment' => null, 'precision' => null],
        'application_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'link_description' => ['type' => 'string', 'length' => 200, 'default' => null, 'null' => true, 'collate' => null, 'comment' => 'Link Description', 'precision' => null, 'fixed' => null],
        'parent_link_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => 'Parent Link ', 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'link_type' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'order_id' => ['type' => 'decimal', 'length' => 2, 'default' => null, 'null' => true, 'comment' => 'Order by ', 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'link_master_application_id_fkey' => ['type' => 'foreign', 'columns' => ['application_id'], 'references' => ['application_master', 'application_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'link_master_link_type_fkey' => ['type' => 'foreign', 'columns' => ['link_type'], 'references' => ['link_type_master', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'link_master_parent_link_id_fkey' => ['type' => 'foreign', 'columns' => ['parent_link_id'], 'references' => ['link_master', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'link_url' => 'Lorem ipsum dolor sit amet',
            'link_name' => 'Lorem ipsum dolor sit amet',
            'created_at' => 1512737484,
            'created_by' => 1.5,
            'is_active' => 1,
            'application_id' => 1,
            'link_description' => 'Lorem ipsum dolor sit amet',
            'parent_link_id' => 1,
            'link_type' => 1,
            'order_id' => 1.5
        ],
    ];
}
