<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ensaios Model
 *
 * @property \App\Model\Table\DadosEnsaioTable&\Cake\ORM\Association\HasMany $DadosEnsaio
 *
 * @method \App\Model\Entity\Ensaio newEmptyEntity()
 * @method \App\Model\Entity\Ensaio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ensaio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ensaio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ensaio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ensaio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ensaio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ensaio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ensaio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ensaio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ensaio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ensaio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ensaio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EnsaiosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ensaios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('DadosEnsaio', [
            'foreignKey' => 'ensaio_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('observacoes')
            ->maxLength('observacoes', 4294967295)
            ->allowEmptyString('observacoes');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
