<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DadosEnsaioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DadosEnsaioTable Test Case
 */
class DadosEnsaioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DadosEnsaioTable
     */
    protected $DadosEnsaio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.DadosEnsaio',
        'app.Ensaios',
        'app.Dados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DadosEnsaio') ? [] : ['className' => DadosEnsaioTable::class];
        $this->DadosEnsaio = $this->getTableLocator()->get('DadosEnsaio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DadosEnsaio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DadosEnsaioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DadosEnsaioTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
