<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DequipmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DequipmentsTable Test Case
 */
class DequipmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DequipmentsTable
     */
    public $Dequipments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dequipments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dequipments') ? [] : ['className' => DequipmentsTable::class];
        $this->Dequipments = TableRegistry::getTableLocator()->get('Dequipments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dequipments);

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
