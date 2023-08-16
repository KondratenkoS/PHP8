<!DOCTYPE html>
<html>
    <div>
        это представление<br>
        действия act контроллера page
    </div>
</html>

    <ul>
        <li><?php echo $var1; ?></li>
        <li><?php echo $var2; ?></li>
        <li><?php echo $var3; ?></li>
    </ul>

    <h1><?= $header ?></h1>
    <ul>
        <li><?= $users[0]; ?></li>
        <li><?= $users[1]; ?></li>
        <li><?= $users[2]; ?></li>
    </ul>

    <h1><?= $header ?></h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user; ?></li>
        <?php endforeach; ?>
    </ul>