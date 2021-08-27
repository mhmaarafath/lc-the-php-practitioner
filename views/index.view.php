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
<?php require 'components/footer.view.php' ?>