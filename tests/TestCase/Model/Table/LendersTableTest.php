<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LendersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LendersTable Test Case
 */
class LendersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LendersTable
     */
    public $Lenders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Lenders',
        'app.Reservations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lenders') ? [] : ['className' => LendersTable::class];
        $this->Lenders = TableRegistry::getTableLocator()->get('Lenders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lenders);

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
