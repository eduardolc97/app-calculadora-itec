<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipologias Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\Tipologia newEmptyEntity()
 * @method \App\Model\Entity\Tipologia newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tipologia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipologia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tipologia findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tipologia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tipologia[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipologia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipologia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tipologia[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipologia[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipologia[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tipologia[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipologiasTable extends Table
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

        $this->setTable('tipologias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Produtos', [
            'foreignKey' => 'tipologia_id',
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
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->allowEmptyString('nome');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 4294967295)
            ->allowEmptyString('descricao');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
