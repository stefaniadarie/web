<table>
    <?php for ($i = 0; $i < count($data['comments']); $i++) { ?>
        <tr>
            <td>
                <?= $data['comments'][$i]->name ?>
            </td>

            <td>
                <?= $data['comments'][$i]->comment ?>
            </td>
        </tr>
    <?php } ?>
</table>

<a href="/informatix/public/comments/add/<?= $data["problem_id"] ?>">Add comment</a>