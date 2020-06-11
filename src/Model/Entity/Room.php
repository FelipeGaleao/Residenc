<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $photo
 * @property string|null $power_calculated
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $sensor
 * @property int $estabilishment_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Estabilishment $estabilishment
 * @property \App\Model\Entity\Equipment[] $equipments
 * @property \App\Model\Entity\Load[] $loads
 */
class Room extends Entity
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
        'photo' => true,
        'power_calculated' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'sensor' => true,
        'estabilishment_id' => true,
        'user' => true,
        'estabilishment' => true,
        'equipments' => true,
        'loads' => true,
    ];
}
