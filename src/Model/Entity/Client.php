<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OauthClient Entity.
 *
 * @property string $id
 * @property string $client_secret
 * @property string $name
 * @property string $redirect_uri
 * @property string $parent_model
 * @property int $parent_id
 * @property \App\Model\Entity\ParentOauthClient $parent_oauth_client
 * @property \App\Model\Entity\ChildOauthClient[] $child_oauth_clients
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
        '*' => true,
        'id' => false,
    ];
}
