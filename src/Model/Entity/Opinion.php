<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opinion Entity
 *
 * @property int $id
 * @property int $rating
 * @property string $description
 * @property int $transmitter_id
 * @property int $receptor_id
 *
 * @property \App\Model\Entity\Transmitter $transmitter
 * @property \App\Model\Entity\Receptor $receptor
 */
class Opinion extends Entity
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
        'rating' => true,
        'description' => true,
        'transmitter_id' => true,
        'receptor_id' => true,
        'transmitter' => true,
        'receptor' => true
    ];
}
