<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estabilishment Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $address
 * @property string|null $voltage_customer
 * @property string|null $aggroupment_customer
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $status
 * @property string|null $photos
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Circuit[] $circuits
 * @property \App\Model\Entity\Equipment[] $equipments
 * @property \App\Model\Entity\Load[] $loads
 * @property \App\Model\Entity\Room[] $rooms
 */
class Estabilishment extends Entity
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
        'address' => true,
        'voltage_customer' => true,
        'aggroupment_customer' => true,
        'created' => true,
        'modified' => true,
        'status' => true,
        'photos' => true,
        'user_id' => true,
        'user' => true,
        'circuits' => true,
        'equipments' => true,
        'loads' => true,
        'rooms' => true,
        'uc' => true,
    ];
}
