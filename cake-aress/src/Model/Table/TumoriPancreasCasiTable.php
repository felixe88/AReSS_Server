<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TumoriPancreasCasi Model
 *
 * @method \App\Model\Entity\TumoriPancreasCasi newEmptyEntity()
 * @method \App\Model\Entity\TumoriPancreasCasi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi get($primaryKey, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TumoriPancreasCasi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TumoriPancreasCasiTable extends Table
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

        $this->setTable('tumori_pancreas_casi');
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
            ->integer('IDComunePop')
            ->allowEmptyString('IDComunePop');

        $validator
            ->integer('IDPatologia')
            ->allowEmptyString('IDPatologia');

        $validator
            ->integer('casi')
            ->allowEmptyString('casi');

        return $validator;
    }
}
