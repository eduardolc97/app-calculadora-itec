<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DadosEnsaio Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property int|null $ensaio_id
 * @property int|null $dado_id
 *
 * @property \App\Model\Entity\Ensaio $ensaio
 * @property \App\Model\Entity\Dado $dado
 */
class DadosEnsaio extends Entity
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
        'created_at' => true,
        'updated_at' => true,
        'ensaio_id' => true,
        'dado_id' => true,
        'ensaio' => true,
        'dado' => true,
    ];
}
