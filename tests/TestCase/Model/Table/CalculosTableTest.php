<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalculosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalculosTable Test Case
 */
class CalculosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalculosTable
     */
    protected $Calculos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Calculos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Calculos') ? [] : ['className' => CalculosTable::class];
        $this->Calculos = $this->getTableLocator()->get('Calculos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Calculos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CalculosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
