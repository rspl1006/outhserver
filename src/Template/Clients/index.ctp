<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Oauth Client'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="oauthClients index large-9 medium-8 columns content">
    <h3><?= __('Oauth Clients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('client_secret') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('redirect_uri') ?></th>
                <th><?= $this->Paginator->sort('parent_model') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $oauthClient): ?>
            <tr>
                <td><?= h($oauthClient->id) ?></td>
                <td><?= h($oauthClient->client_secret) ?></td>
                <td><?= h($oauthClient->name) ?></td>
                <td><?= h($oauthClient->redirect_uri) ?></td>
                <td><?= h($oauthClient->parent_model) ?></td>
                <td><?= $oauthClient->has('parent_oauth_client') ? $this->Html->link($oauthClient->parent_oauth_client->name, ['controller' => 'OauthClients', 'action' => 'view', $oauthClient->parent_oauth_client->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $oauthClient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oauthClient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oauthClient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oauthClient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
