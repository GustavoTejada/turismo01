<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property string $gender
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Client extends Entity
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
        'password' => true,
        'name' => true,
        'birthdate' => true,
        'address' => true,
        'city' => true,
        'country' => true,
        'phone' => true,
        'gender' => true,
        'reservations' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
