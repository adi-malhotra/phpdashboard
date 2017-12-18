<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinkTypeMasterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinkTypeMasterTable Test Case
 */
class LinkTypeMasterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LinkTypeMasterTable
     */
    public $LinkTypeMaster;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.link_type_master'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LinkTypeMaster') ? [] : ['className' => LinkTypeMasterTable::class];
        $this->LinkTypeMaster = TableRegistry::get('LinkTypeMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LinkTypeMaster);

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
}
