<?php require 'components/header.view.php' ?>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?=ucfirst($user->name)?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/users" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require 'components/footer.view.php' ?>