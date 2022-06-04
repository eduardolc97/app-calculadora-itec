<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property int|null $cliente_id
 * @property string|null $nome
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property int|null $tipologia_id
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Tipologia $tipologia
 */
class Produto extends Entity
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
        'cliente_id' => true,
        'nome' => true,
        'descricao' => true,
        'created_at' => true,
        'updated_at' => true,
        'tipologia_id' => true,
        'cliente' => true,
        'tipologia' => true,
    ];
}
