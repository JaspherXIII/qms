<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appointments Model
 *
 * @method \App\Model\Entity\Appointment newEmptyEntity()
 * @method \App\Model\Entity\Appointment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Appointment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Appointment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Appointment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Appointment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Appointment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Appointment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appointment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Appointment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appointment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appointment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Appointment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AppointmentsTable extends Table
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

        $this->setTable('appointments');
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
            ->scalar('customer_name')
            ->maxLength('customer_name', 255)
            ->requirePresence('customer_name', 'create')
            ->notEmptyString('customer_name');

        $validator
            ->dateTime('appointment_time')
            ->requirePresence('appointment_time', 'create')
            ->notEmptyDateTime('appointment_time');

        $validator
            ->scalar('purpose')
            ->maxLength('purpose', 255)
            ->allowEmptyString('purpose');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        return $validator;
    }
}
