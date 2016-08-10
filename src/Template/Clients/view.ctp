<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Oauth Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oauth Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Oauth Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oauth Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Oauth Clients'), ['controller' => 'OauthClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Oauth Client'), ['controller' => 'OauthClients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('API_KEY') ?></th>
            <td><?= h($client->id) ?></td>
        </tr>
        <tr>
            <th><?= __('API_SECRET_KEY') ?></th>
            <td><?= h($client->client_secret) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Redirect Uri') ?></th>
            <td><?= h($client->redirect_uri) ?></td>
        </tr>
        
    </table>
    <div class="related">
        <h4><?= __('Related Oauth Clients') ?></h4>
        <?php if (!empty($client->child_oauth_clients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Client Secret') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Redirect Uri') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            
        </table>
    <?php endif; ?>
    </div>
</div>
