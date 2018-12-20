<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $agreed_time
 * @property int $number_people
 * @property string $payment_info
 * @property int $client_id
 * @property int $service_id
 * @property \Cake\I18n\FrozenDate $date_created
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Service $service
 */
class Reservation extends Entity
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
        'agreed_time' => true,
        'number_people' => true,
        'payment_info' => true,
        'client_id' => true,
        'service_id' => true,
        'date_created' => true,
        'client' => true,
        'service' => true
    ];
}
