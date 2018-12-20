<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OpinionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OpinionsTable Test Case
 */
class OpinionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OpinionsTable
     */
    public $Opinions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Opinions',
        'app.Transmitters',
        'app.Receptors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Opinions') ? [] : ['className' => OpinionsTable::class];
        $this->Opinions = TableRegistry::getTableLocator()->get('Opinions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Opinions);

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
