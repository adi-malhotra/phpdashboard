<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRoleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRoleTable Test Case
 */
class UserRoleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRoleTable
     */
    public $UserRole;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_role',
        'app.user_auth',
        'app.logins',
        'app.orgs',
        'app.users',
        'app.role_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserRole') ? [] : ['className' => UserRoleTable::class];
        $this->UserRole = TableRegistry::get('UserRole', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRole);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
