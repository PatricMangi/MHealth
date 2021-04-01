<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clinicians Model
 *
 * @method \App\Model\Entity\Clinician newEmptyEntity()
 * @method \App\Model\Entity\Clinician newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Clinician[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clinician get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clinician findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Clinician patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clinician[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clinician|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clinician saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CliniciansTable extends Table
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

        $this->setTable('clinicians');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->scalar('Reg_no')
            ->maxLength('Reg_no', 5)
            ->requirePresence('Reg_no', 'create')
            ->notEmptyString('Reg_no');

        $validator
            ->scalar('Reg_status')
            ->maxLength('Reg_status', 10)
            ->requirePresence('Reg_status', 'create')
            ->notEmptyString('Reg_status');

        return $validator;
    }
}
