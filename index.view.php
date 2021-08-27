<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($tasks as $task): ?>
            <?php if($task->isComplete()): ?>
                <strike>
                <li><?=ucfirst($task->description)?></li>
                </strike>
            <?php else: ?>
                <li><?=ucfirst($task->description)?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>