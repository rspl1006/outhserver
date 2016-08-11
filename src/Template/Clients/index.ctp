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
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $oauthClient): ?>
            <tr>
                <td><?= h($oauthClient->name) ?></td>
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
