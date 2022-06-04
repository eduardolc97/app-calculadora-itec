<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DadosEnsaio Model
 *
 * @property \App\Model\Table\EnsaiosTable&\Cake\ORM\Association\BelongsTo $Ensaios
 * @property \App\Model\Table\DadosTable&\Cake\ORM\Association\BelongsTo $Dados
 *
 * @method \App\Model\Entity\DadosEnsaio newEmptyEntity()
 * @method \App\Model\Entity\DadosEnsaio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DadosEnsaio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DadosEnsaio get($primaryKey, $options = [])
 * @method \App\Model\Entity\DadosEnsaio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DadosEnsaio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DadosEnsaio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DadosEnsaio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DadosEnsaio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DadosEnsaio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DadosEnsaio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DadosEnsaio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DadosEnsaio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DadosEnsaioTable extends Table
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

        $this->setTable('dados_ensaio');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ensaios', [
            'foreignKey' => 'ensaio_id',
        ]);
        $this->belongsTo('Dados', [
            'foreignKey' => 'dado_id',
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
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        $validator
            ->integer('ensaio_id')
            ->allowEmptyString('ensaio_id');

        $validator
            ->integer('dado_id')
            ->allowEmptyString('dado_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('ensaio_id', 'Ensaios'), ['errorField' => 'ensaio_id']);
        $rules->add($rules->existsIn('dado_id', 'Dados'), ['errorField' => 'dado_id']);

        return $rules;
    }
}
