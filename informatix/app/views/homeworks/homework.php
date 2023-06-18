<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>

<p> <?= $data["homework"]->name ?> </p>

<table>
<?php for($i = 0; $i < count($data['problems']); $i++) {?>
    <tr>
        <td>
            <a href="/informatix/public/problems/problem/<?= $data['problems'][$i]->id?>">
            <div class=button><?= $data['problems'][$i]->name ?></div>
            </a>
        </td>
    </tr>
    <?php } ?>
</table>


<a href="/informatix/public/homeworks/selectproblem/<?= $data["homework"]->id ?>">Select problem</a>
<div class=button>
<a href="/informatix/public/homeworks/">Back</a>
</div>