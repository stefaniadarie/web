<table>
<?php for($i = 0; $i < count($data['problems']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/problems/pendingproblem/<?= $data['problems'][$i]->id?>">
                <?= $data['problems'][$i]->name ?>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>