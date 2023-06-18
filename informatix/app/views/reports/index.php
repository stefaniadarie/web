<table>
<?php for($i = 0; $i < count($data['class_id']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/reports<?= $data['class'][$i]->id?>">
                <?= $data['class'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>
