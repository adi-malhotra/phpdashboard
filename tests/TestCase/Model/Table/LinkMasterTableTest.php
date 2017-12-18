<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinkMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinkMasterTable Test Case
 */
class LinkMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LinkMasterTable
     */
    public $LinkMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.link_master',
        'app.application_master',
        'app.applications',
        'app.orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LinkMaster') ? [] : ['className' => LinkMasterTable::class];
        $this->LinkMaster = TableRegistry::get('LinkMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LinkMaster);

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
