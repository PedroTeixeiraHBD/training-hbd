<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingUsersTable Test Case
 */
class TrainingUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingUsersTable
     */
    protected $TrainingUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TrainingUsers',
        'app.Prices',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TrainingUsers') ? [] : ['className' => TrainingUsersTable::class];
        $this->TrainingUsers = $this->getTableLocator()->get('TrainingUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TrainingUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TrainingUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TrainingUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
