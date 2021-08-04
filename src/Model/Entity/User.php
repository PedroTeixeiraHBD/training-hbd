<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $Nome
 * @property string $Cargo
 * @property string $Empresa
 * @property string $Departamento
 *
 * @property \App\Model\Entity\TrainingUser[] $training_users
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
        'Nome' => true,
        'Cargo' => true,
        'Empresa' => true,
        'Departamento' => true,
        'training_users' => true,
    ];
}
