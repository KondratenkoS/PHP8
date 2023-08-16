<!DOCTYPE html>
<html>
    <h1>Продукт - <?= $name; ?> из категории - <?= $category; ?></h1>
    <p>
        Цена: <?= $price; ?>$, количество: <?= $quantity; ?>
    </p>
    <p>
        Общая стоимость: <?php echo $price * $quantity; ?>
    </p>
</html>