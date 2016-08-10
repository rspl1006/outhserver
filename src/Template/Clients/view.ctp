<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Oauth Client'), ['action' => 'edit', $oauthClient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Oauth Client'), ['action' => 'delete', $oauthClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oauthClient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Oauth Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Oauth Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Oauth Clients'), ['controller' => 'OauthClients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Oauth Client'), ['controller' => 'OauthClients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="oauthClients view large-9 medium-8 columns content">
    <h3><?= h($oauthClient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($oauthClient->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Client Secret') ?></th>
            <td><?= h($oauthClient->client_secret) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($oauthClient->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Redirect Uri') ?></th>
            <td><?= h($oauthClient->redirect_uri) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent Model') ?></th>
            <td><?= h($oauthClient->parent_model) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent Oauth Client') ?></th>
            <td><?= $oauthClient->has('parent_oauth_client') ? $this->Html->link($oauthClient->parent_oauth_client->name, ['controller' => 'OauthClients', 'action' => 'view', $oauthClient->parent_oauth_client->id]) : '' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Oauth Clients') ?></h4>
        <?php if (!empty($oauthClient->child_oauth_clients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Client Secret') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Redirect Uri') ?></th>
                <th><?= __('Parent Model') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($oauthClient->child_oauth_clients as $childOauthClients): ?>
            <tr>
                <td><?= h($childOauthClients->id) ?></td>
                <td><?= h($childOauthClients->client_secret) ?></td>
                <td><?= h($childOauthClients->name) ?></td>
                <td><?= h($childOauthClients->redirect_uri) ?></td>
                <td><?= h($childOauthClients->parent_model) ?></td>
                <td><?= h($childOauthClients->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OauthClients', 'action' => 'view', $childOauthClients->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'OauthClients', 'action' => 'edit', $childOauthClients->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OauthClients', 'action' => 'delete', $childOauthClients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childOauthClients->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
