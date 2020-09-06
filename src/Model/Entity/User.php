<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property string $password
 * @property int $level
 * @property bool $active
 * @property \Cake\I18n\FrozenTime|null $lastAccess
 * @property string $session
 * @property string $avatar
 * @property \Cake\I18n\FrozenTime $timeStamp
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
        'name' => true,
        'email' => true,
        'password' => true,
        'level' => true,
        'active' => true,
        'lastAccess' => true,
        'session' => true,
        'avatar' => true,
        'timeStamp' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
