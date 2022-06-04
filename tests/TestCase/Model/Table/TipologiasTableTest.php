<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipologiasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipologiasTable Test Case
 */
class TipologiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipologiasTable
     */
    protected $Tipologias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipologias',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipologias') ? [] : ['className' => TipologiasTable::class];
        $this->Tipologias = $this->getTableLocator()->get('Tipologias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipologias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipologiasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
