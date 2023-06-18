<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>


<table>
    <?php if (is_array($data['problems'])) : ?>
        <?php for($i = 0; $i < count($data['problems']); $i++) : ?>
            <tr>
                <td>
                    <a href="/informatix/public/problems/problem/<?= $data['problems'][$i]->id?>">
                        <div class="button"><?= $data['problems'][$i]->name ?></div>
                    </a>
                </td>
            </tr>
        <?php endfor; ?>
    <?php endif; ?>
</table>


<a href="/informatix/public/homeworks/selectproblem/<?= $data["homework"]->id ?>">Select problem</a>
