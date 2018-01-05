<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemTypeMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemTypeMasterTable Test Case
 */
class ItemTypeMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemTypeMasterTable
     */
    public $ItemTypeMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.item_type_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ItemTypeMaster') ? [] : ['className' => ItemTypeMasterTable::class];
        $this->ItemTypeMaster = TableRegistry::get('ItemTypeMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemTypeMaster);

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
