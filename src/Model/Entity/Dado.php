<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dado Entity
 *
 * @property int $id
 * @property string|null $tipo
 * @property string|null $nome
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\DadosEnsaio[] $dados_ensaio
 */
class Dado extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'tipo' => true,
        'nome' => true,
        'created_at' => true,
        'updated_at' => true,
        'dados_ensaio' => true,
    ];
}
