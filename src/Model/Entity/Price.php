<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Price Entity
 *
 * @property int $id
 * @property int $training_id
 * @property string $Entidade
 * @property string $Preco
 * @property \Cake\I18n\FrozenDate $Data_Validade
 * @property \Cake\I18n\FrozenDate $Data_Inicio
 * @property string $Duracao
 * @property string $Calendarizacao
 *
 * @property \App\Model\Entity\Training $training
 * @property \App\Model\Entity\TrainingUser[] $training_users
 */
class Price extends Entity
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
        'training_id' => true,
        'Entidade' => true,
        'Preco' => true,
        'Data_Validade' => true,
        'Data_Inicio' => true,
        'Duracao' => true,
        'Calendarizacao' => true,
        'training' => true,
        'training_users' => true,
    ];
}
