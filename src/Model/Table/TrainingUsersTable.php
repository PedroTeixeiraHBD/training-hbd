<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingUsers Model
 *
 * @property \App\Model\Table\PricesTable&\Cake\ORM\Association\BelongsTo $Prices
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\TrainingUser newEmptyEntity()
 * @method \App\Model\Entity\TrainingUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TrainingUsersTable extends Table
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

        $this->setTable('training_users');

        $this->belongsTo('Prices', [
            'foreignKey' => 'price_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
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
            ->requirePresence('id', 'create')
            ->notEmptyString('id');

        $validator
            ->date('Data_Inscricao')
            ->requirePresence('Data_Inscricao', 'create')
            ->notEmptyDate('Data_Inscricao');

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
        $rules->add($rules->existsIn(['price_id'], 'Prices'), ['errorField' => 'price_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
