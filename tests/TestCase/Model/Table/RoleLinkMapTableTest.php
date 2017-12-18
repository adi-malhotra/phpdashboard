<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoleLinkMapTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoleLinkMapTable Test Case
 */
class RoleLinkMapTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoleLinkMapTable
     */
    public $RoleLinkMap;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.role_link_map',
        'app.link_master',
        'app.application_master',
        'app.applications',
        'app.orders',
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
        $config = TableRegistry::exists('RoleLinkMap') ? [] : ['className' => RoleLinkMapTable::class];
        $this->RoleLinkMap = TableRegistry::get('RoleLinkMap', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoleLinkMap);

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
