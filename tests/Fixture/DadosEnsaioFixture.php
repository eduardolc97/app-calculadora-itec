<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DadosEnsaioFixture
 */
class DadosEnsaioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dados_ensaio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'created_at' => 1654375089,
                'updated_at' => 1654375089,
                'ensaio_id' => 1,
                'dado_id' => 1,
            ],
        ];
        parent::init();
    }
}
