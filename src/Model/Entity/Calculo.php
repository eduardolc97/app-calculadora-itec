<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calculo Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $observacoes
 * @property string|null $referencias
 * @property string|null $formula
 * @property string|null $enunciado
 * @property string|null $unidade
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 */
class Calculo extends Entity
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
        'nome' => true,
        'observacoes' => true,
        'referencias' => true,
        'formula' => true,
        'enunciado' => true,
        'unidade' => true,
        'created_at' => true,
        'updated_at' => true,
    ];
}
