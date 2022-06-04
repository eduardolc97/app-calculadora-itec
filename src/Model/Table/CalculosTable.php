<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calculos Model
 *
 * @method \App\Model\Entity\Calculo newEmptyEntity()
 * @method \App\Model\Entity\Calculo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Calculo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calculo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calculo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Calculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calculo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calculo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Calculo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CalculosTable extends Table
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

        $this->setTable('calculos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 4294967295)
            ->allowEmptyString('nome');

        $validator
            ->scalar('observacoes')
            ->maxLength('observacoes', 4294967295)
            ->allowEmptyString('observacoes');

        $validator
            ->scalar('referencias')
            ->maxLength('referencias', 4294967295)
            ->allowEmptyString('referencias');

        $validator
            ->scalar('formula')
            ->maxLength('formula', 4294967295)
            ->allowEmptyString('formula');

        $validator
            ->scalar('enunciado')
            ->maxLength('enunciado', 50)
            ->allowEmptyString('enunciado');

        $validator
            ->scalar('unidade')
            ->maxLength('unidade', 15)
            ->allowEmptyString('unidade');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
