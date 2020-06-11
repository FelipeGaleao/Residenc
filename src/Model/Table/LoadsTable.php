<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loads Model
 *
 * @property \App\Model\Table\CircuitsTable&\Cake\ORM\Association\BelongsTo $Circuits
 * @property \App\Model\Table\RoomsTable&\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\EstabilishmentsTable&\Cake\ORM\Association\BelongsTo $Estabilishments
 * @property \App\Model\Table\EquipmentsTable&\Cake\ORM\Association\HasMany $Equipments
 *
 * @method \App\Model\Entity\Load get($primaryKey, $options = [])
 * @method \App\Model\Entity\Load newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Load[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Load|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Load saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Load patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Load[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Load findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LoadsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('loads');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Circuits', [
            'foreignKey' => 'circuit_id',
        ]);
        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
        ]);
        $this->belongsTo('Estabilishments', [
            'foreignKey' => 'estabilishment_id',
        ]);
        $this->hasMany('Equipments', [
            'foreignKey' => 'load_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 45)
            ->allowEmptyString('description');

        $validator
            ->integer('current')
            ->allowEmptyString('current');

        $validator
            ->integer('voltage')
            ->allowEmptyString('voltage');

        $validator
            ->integer('active_power')
            ->allowEmptyString('active_power');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['circuit_id'], 'Circuits'));
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        $rules->add($rules->existsIn(['estabilishment_id'], 'Estabilishments'));

        return $rules;
    }
}
