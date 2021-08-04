<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingUser Entity
 *
 * @property int $id
 * @property int $price_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenDate $Data_Inscricao
 *
 * @property \App\Model\Entity\Price $price
 * @property \App\Model\Entity\User $user
 */
class TrainingUser extends Entity
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
        'id' => true,
        'price_id' => true,
        'user_id' => true,
        'Data_Inscricao' => true,
        'price' => true,
        'user' => true,
    ];
}
