<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<body>
<table>
<?php for($i = 0; $i < count($data['students']); $i++) {?>
    <tr>
        <td>
            <!-- <a href="/informatix/public/students/index/<?= $data['students'][$i]->id?>"> -->
                <?= $data['students'][$i]->name ?>
            <!-- </a> -->
        </td>
    </tr>
    <?php } ?>
</table>


<?php if ($data["isTeacher"]) : ?>

    <a href="/informatix/public/students/add/<?= $data["class_id"] ?>">Add new student</a>

<?php endif;?>

<a href="/informatix/public/homeworks/index/<?= $data["class_id"] ?>">Homeworks</a>

<a href="/informatix/public/classes">Back</a>
</body>