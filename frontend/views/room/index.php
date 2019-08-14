<?php
/* @var $this yii\web\View */
?>
<h1>room/index</h1>

<?php foreach ($roomList as $roomForm): ?>
    <?php echo $roomForm->kvartira . "  " .  $roomForm->price; ?>
<hr>
    <?php endforeach; ?>