<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<body>
<form action="/informatix/public/students/add/<?= $data["class_id"] ?>" method="post">
<div class="center2">
    <div class="field">
        <label for="name">Student username</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <input type="submit" value="Add student"/>
</div>
</form>
</body>
<a href="/informatix/public/students/index/<?= $data["class_id"]?>">Back</a>