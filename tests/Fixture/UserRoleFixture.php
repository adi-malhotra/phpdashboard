<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserRoleFixture
 *
 */
class UserRoleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'user_role';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'auth_user_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'role_id' => ['type' => 'biginteger', 'length' => 20, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'is_active' => ['type' => 'boolean', 'length' => null, 'default' => 0, 'null' => false, 'comment' => null, 'precision' => null],
        'created_by' => ['type' => 'decimal', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'created_date' => ['type' => 'timestamp', 'length' => null, 'default' => 'now()', 'null' => false, 'comment' => null, 'precision' => null],
        'modified_by' => ['type' => 'decimal', 'length' => 5, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'modified_date' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'role_sl_no' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['role_sl_no'], 'length' => []],
            'user_role_auth_user_id_fkey' => ['type' => 'foreign', 'columns' => ['auth_user_id'], 'references' => ['user_auth', 'user_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'user_role_role_id_fkey' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['role_master', 'role_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'auth_user_id' => 1,
            'role_id' => 1,
            'is_active' => 1,
            'created_by' => 1.5,
            'created_date' => 1512737501,
            'modified_by' => 1.5,
            'modified_date' => 1512737501,
            'role_sl_no' => 1
        ],
    ];
}
