<table>
<?php for($i = 0; $i < count($data['homeworks']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/homeworks/homework/<?= $data['homeworks'][$i]->id?>">
                <?= $data['homeworks'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>


<?php if ($data["isTeacher"]) : ?>

    <a href="/informatix/public/homeworks/add/<?= $data["class_id"] ?>">Add new homework</a>

<?php endif;?>


<a href="/informatix/public/classes">Back</a>