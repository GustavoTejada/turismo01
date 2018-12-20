<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $description
 * @property int $lender_id
 *
 * @property \App\Model\Entity\Lender $lender
 * @property \App\Model\Entity\Reservation[] $reservations
 * @property \App\Model\Entity\Stock[] $stocks
 */
class Service extends Entity
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
        'price' => true,
        'description' => true,
        'lender_id' => true,
        'lender' => true,
        'reservations' => true,
        'stocks' => true
    ];
}
