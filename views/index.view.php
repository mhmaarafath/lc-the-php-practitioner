<?php require 'components/header.view.php' ?>
<ul>
        <?php foreach($tasks as $task): ?>
            <?php if($task->completed): ?>
                <strike>
                <li><?=ucfirst($task->description)?></li>
                </strike>
            <?php else: ?>
                <li><?=ucfirst($task->description)?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?=ucfirst($user->name)?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/name" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require 'components/footer.view.php' ?>