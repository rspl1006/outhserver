<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $oauthClient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Oauth Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Oauth Clients'), ['controller' => 'OauthClients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Oauth Client'), ['controller' => 'OauthClients', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="oauthClients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Edit Oauth Client') ?></legend>
        <?php
            echo $this->Form->input('id',array('label' => 'API_KEY','type' => 'text','readonly'=>true));
            echo $this->Form->input('client_secret',array('label' => 'API_SECRET_KEY','readonly'=>true));
            echo $this->Form->input('name');
            echo $this->Form->input('redirect_uri');
            //echo $this->Form->input('parent_model');
            //echo $this->Form->input('parent_id', ['options' => $parentOauthClients, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
