<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $cpf
 * @property string|null $email
 * @property string|null $password
 * @property string|null $address
 * @property string|null $city
 * @property string|null $uf
 * @property int|null $type_user
 * @property string|null $photo
 * @property int $role_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Circuit[] $circuits
 * @property \App\Model\Entity\Estabilishment[] $estabilishments
 * @property \App\Model\Entity\Room[] $rooms
 */
class User extends Entity
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
        'username' => true,
        'firstname' => true,
        'lastname' => true,
        'cpf' => true,
        'email' => true,
        'password' => true,
        'address' => true,
        'city' => true,
        'uf' => true,
        'type_user' => true,
        'photo' => true,
        'role_id' => true,
        'role' => true,
        'telefone' => true,

    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
