<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationMasterFixture
 *
 */
class ApplicationMasterFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'application_master';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'application_id' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'application_name' => ['type' => 'string', 'length' => 250, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'is_active' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'created_by' => ['type' => 'decimal', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'creation_date' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified_by' => ['type' => 'decimal', 'length' => 5, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'modified_date' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'description' => ['type' => 'string', 'length' => 254, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'item_type' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => false, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['application_id'], 'length' => []],
            'application_master_item_type_master_fkey' => ['type' => 'foreign', 'columns' => ['item_type'], 'references' => ['item_type_master', 'item_type_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'application_id' => 1,
            'application_name' => 'Lorem ipsum dolor sit amet',
            'is_active' => 1,
            'created_by' => 1.5,
            'item_type' => 1,
            'creation_date' => 1512737390,
            'modified_by' => 1.5,
            'modified_date' => 1512737390,
            'description' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
