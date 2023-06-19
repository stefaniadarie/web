<table>
<?php for($i = 0; $i < count($data['problems']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/problems/pendingproblem/<?= $data['problems'][$i]->id?>">
                <div class="center2 button"><?= $data['problems'][$i]->name ?></div>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>