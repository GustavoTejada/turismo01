<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lender Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property \Cake\I18n\FrozenTime $open_time
 * @property \Cake\I18n\FrozenTime $close_time
 * @property string $rules
 * @property string $description
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Lender extends Entity
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
        'address' => true,
        'city' => true,
        'country' => true,
        'phone' => true,
        'open_time' => true,
        'close_time' => true,
        'rules' => true,
        'description' => true,
        'reservations' => true
    ];
}
