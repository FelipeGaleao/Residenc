<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Load Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $circuit_id
 * @property string|null $room_id
 * @property string|null $estabilishment_id
 * @property int|null $current
 * @property int|null $voltage
 * @property int|null $active_power
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $status
 *
 * @property \App\Model\Entity\Circuit $circuit
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Estabilishment $estabilishment
 * @property \App\Model\Entity\Equipment[] $equipments
 */
class Load extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'circuit_id' => true,
        'room_id' => true,
        'estabilishment_id' => true,
        'current' => true,
        'voltage' => true,
        'active_power' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'circuit' => true,
        'room' => true,
        'estabilishment' => true,
        'equipments' => true,
    ];
}
