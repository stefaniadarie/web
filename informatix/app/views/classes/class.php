<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>

<body>
    <table>
        <?php for ($i = 0; $i < count($data['students']); $i++) { ?>
            <tr>
                <td>
                    <a href="/informatix/public/classes/class/<?= $data['students'][$i]->id ?>">
                        <div class="card"><?= $data['students'][$i]->name ?></div>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <p>asd</p>

    <?php echo "asd" . $data["teacher"]; ?>

    <?php if ($data["teacher"]): ?>

        <a href="/informatix/public/classes/add"><div class="button3">Add new student</a>
    <?php endif; ?>

    <a href="/informatix/public/classes">Back</a>

    <p>asd</p>
</body>