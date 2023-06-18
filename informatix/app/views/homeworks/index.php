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


<?php if ($data["user"]->user_type === "Teacher") : ?>

    <a href="/informatix/public/homeworks/add/<?= $data["class_id"] ?>">Add new homework</a>

<?php endif;?>


<a href="/informatix/public/classes">Back</a>