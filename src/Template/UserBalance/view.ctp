<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Balance'), ['action' => 'edit', $userBalance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Balance'), ['action' => 'delete', $userBalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userBalance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Balance'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Balance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userBalance view large-9 medium-8 columns content">
    <h3><?= h($userBalance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userBalance->has('user') ? $this->Html->link($userBalance->user->id, ['controller' => 'Users', 'action' => 'view', $userBalance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Balance') ?></th>
            <td><?= h($userBalance->balance) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($userBalance->id) ?></td>
        </tr>
    </table>
</div>
