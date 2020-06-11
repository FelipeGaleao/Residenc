<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estabilishments Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CircuitsTable&\Cake\ORM\Association\HasMany $Circuits
 * @property \App\Model\Table\EquipmentsTable&\Cake\ORM\Association\HasMany $Equipments
 * @property \App\Model\Table\LoadsTable&\Cake\ORM\Association\HasMany $Loads
 * @property \App\Model\Table\RoomsTable&\Cake\ORM\Association\HasMany $Rooms
 *
 * @method \App\Model\Entity\Estabilishment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estabilishment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estabilishment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estabilishment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estabilishment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estabilishment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estabilishment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estabilishment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstabilishmentsTable extends Table
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

        $this->setTable('estabilishments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photos' => [
            ]
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Circuits', [
            'foreignKey' => 'estabilishment_id',
        ]);
        $this->hasMany('Equipments', [
            'foreignKey' => 'estabilishment_id',
        ]);
        $this->hasMany('Loads', [
            'foreignKey' => 'estabilishment_id',
        ]);
        $this->hasMany('Rooms', [
            'foreignKey' => 'estabilishment_id',
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
