<?php
/* @var $this yii\web\View */
?>
<h1>room/index</h1>

// Пускай здесь будет название базы room или название модели roomForm - нихуя не работает.

<?php foreach ($roomList as $room): ?>
    <?php echo $room->kvartira . "  " .  $roomForm->price; ?>
<hr>
    <?php endforeach; ?>