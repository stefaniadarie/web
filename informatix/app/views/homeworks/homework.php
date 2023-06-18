<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>

<div class="center">
<table>
    
    <?php if (is_array($data['problems'])) : ?>
        <?php for($i = 0; $i < count($data['problems']); $i++) : ?>
            <tr>
                <td>
                    <a href="/informatix/public/problems/problem/<?= $data['problems'][$i]->id?>">
                        <div class="button"><?= $data['problems'][$i]->name ?></div>
                    </a>
                </td>
                <td>
                <div class="button">Deadline: <?= $data["homework"]->deadline ?></div>
            </td>
            </tr>
        <?php endfor; ?>
    <?php endif; ?>

</table>
        </div>

<div class="button3"><a href="/informatix/public/homeworks/selectproblem/<?= $data["homework"]->id ?>">Add new problem to homework</a></div>
