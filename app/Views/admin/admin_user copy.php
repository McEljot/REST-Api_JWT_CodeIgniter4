



<h2><?= esc($title) ?></h2>

<?php if (! empty($users) && is_array($users)): ?>

    <?php foreach ($users as $users_item): ?>

        <h3><?= esc($users_item['id']) ?></h3>

        <div class="main">
            <?= esc($users_item['name']) ?>
        </div>
        <p><a href="/users/<?=  esc($users_item['slug'], 'url') ?>">View users</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>

