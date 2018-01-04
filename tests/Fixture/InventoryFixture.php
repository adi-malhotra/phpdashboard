<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoryFixture
 *
 */
class InventoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventory';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'application_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'quantity' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'transaction_date' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => true, 'comment' => null, 'precision' => null],
        'id' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'inventory_application_master_fkey' => ['type' => 'foreign', 'columns' => ['application_name'], 'references' => ['application_master', 'application_name'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'quantity' => 1,
            'transaction_date' => 1514344911,
            'id' => 1
        ],
    ];
}
