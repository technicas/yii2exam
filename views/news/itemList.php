<?php
echo $this->context->renderPartial('_copyright');
?>
<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>

    <?php foreach ($newsList as $item) { ?>
        <tr>
            <td><a href="<?=Yii::$app->urlManager->createUrl(['news/item-detail', 'title' => $item['title']])?>"><?php echo $item['title'] ?></a></td>
            <td><?php echo Yii::$app->formatter->asDatetime($item['date'], "php:Y-m-d")  ?></td>
        </tr>
    <?php }?>
</table>
