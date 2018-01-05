<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequestsFixture
 *
 */
class RequestsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'application_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'quantity' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'request_status' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => true, 'comment' => null, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 20, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'requests_application_master_fkey' => ['type' => 'foreign', 'columns' => ['application_id'], 'references' => ['application_master', 'application_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'requests_user_auth_fkey' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['user_auth', 'user_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []]
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
            'application_id' => 1,
            'quantity' => 1,
            'request_status' => 1,
            'user_id' => 1
        ],
    ];
}
