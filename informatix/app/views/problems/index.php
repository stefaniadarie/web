<table>
<?php for($i = 0; $i < count($data['problems']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/problems/problem/<?= $data['problems'][$i]->id?>">
                <?= $data['problems'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<?php if ($data["user"]->user_type === "Teacher") : ?>

<a href="/informatix/public/problems/add?>">Add new problem</a>

<?php endif;?>