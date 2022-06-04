<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnsaiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnsaiosTable Test Case
 */
class EnsaiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnsaiosTable
     */
    protected $Ensaios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ensaios',
        'app.DadosEnsaio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ensaios') ? [] : ['className' => EnsaiosTable::class];
        $this->Ensaios = $this->getTableLocator()->get('Ensaios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ensaios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnsaiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
