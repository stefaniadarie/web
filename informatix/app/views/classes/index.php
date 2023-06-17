<table>
<?php for($i = 0; $i < count($data['classes']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/students/index/<?= $data['classes'][$i]->id?>">
                <?= $data['classes'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>


<?php if ($data["isTeacher"]) : ?>

<a href="/informatix/public/classes/add">Add new class</a>

<?php endif;?>

<a href="/informatix/public/">Back</a>