<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StocksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StocksTable Test Case
 */
class StocksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StocksTable
     */
    public $Stocks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Stocks',
        'app.Services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Stocks') ? [] : ['className' => StocksTable::class];
        $this->Stocks = TableRegistry::getTableLocator()->get('Stocks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stocks);

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
