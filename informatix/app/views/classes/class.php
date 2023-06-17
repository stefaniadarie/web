<table>
<?php for($i = 0; $i < count($data['students']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/classes/class/<?= $data['students'][$i]->id?>">
                <?= $data['students'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<p>asd</p>

<?php echo "asd" . $data["teacher"]; ?>

<?php if ($data["teacher"]) : ?>

<a href="/informatix/public/classes/add">Add new student</a>

<?php endif;?>

<a href="/informatix/public/classes">Back</a>

<p>asd</p>