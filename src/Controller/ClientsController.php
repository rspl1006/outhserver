<?php
namespace App\Controller;

/**
 * OauthClients Controller
 *
 * @property \OAuthServer\Model\Table\ClientsTable $Clients
 */
class ClientsController extends AppController
{

    public $modelClass = 'OAuthServer.Clients';
    
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'name'
        ],
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];
}