<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prices Model
 *
 * @property \App\Model\Table\TrainingsTable&\Cake\ORM\Association\BelongsTo $Trainings
 * @property \App\Model\Table\TrainingUsersTable&\Cake\ORM\Association\HasMany $TrainingUsers
 *
 * @method \App\Model\Entity\Price newEmptyEntity()
 * @method \App\Model\Entity\Price newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Price[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Price get($primaryKey, $options = [])
 * @method \App\Model\Entity\Price findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Price patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Price[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Price|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Price saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Price[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Price[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Price[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Price[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PricesTable extends Table
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

        $this->setTable('prices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Trainings', [
            'foreignKey' => 'training_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('TrainingUsers', [
            'foreignKey' => 'price_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('Entidade')
            ->maxLength('Entidade', 30)
            ->requirePresence('Entidade', 'create')
            ->notEmptyString('Entidade');

        $validator
            ->decimal('Preco')
            ->requirePresence('Preco', 'create')
            ->notEmptyString('Preco');

        $validator
            ->date('Data_Validade')
            ->requirePresence('Data_Validade', 'create')
            ->notEmptyDate('Data_Validade');

        $validator
            ->date('Data_Inicio')
            ->requirePresence('Data_Inicio', 'create')
            ->notEmptyDate('Data_Inicio');

        $validator
            ->scalar('Duracao')
            ->maxLength('Duracao', 30)
            ->requirePresence('Duracao', 'create')
            ->notEmptyString('Duracao');

        $validator
            ->scalar('Calendarizacao')
            ->maxLength('Calendarizacao', 50)
            ->requirePresence('Calendarizacao', 'create')
            ->notEmptyString('Calendarizacao');

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
        $rules->add($rules->existsIn(['training_id'], 'Trainings'), ['errorField' => 'training_id']);

        return $rules;
    }
}
