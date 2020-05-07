<div class="admin-default-index">
    <h1>Административная панель</h1>
    <a href="/admin/create">Создать</a>
    <?php
    foreach ($dishes as $dish){ ?>
        <span><?= $dish->name; ?></span>
        <a href="/admin/edit?id=<?php echo $dish->dish_id; ?>">Редактировать</a>
        <a href="/admin/delete?id=<?php echo $dish->dish_id; ?>">Удалить</a>

    <?php } ?>


</div>
