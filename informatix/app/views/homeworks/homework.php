<p> <?= $data["homework"]->name ?> </p>

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


<a href="/informatix/public/homeworks/selectproblem/<?= $data["homework"]->id ?>">Select problem</a>

<a href="/informatix/public/homeworks/">Back</a>