<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<body>
<form action="/informatix/public/students/add/<?= $data["class_id"] ?>" method="post">
<div class="center">
    <div class="field">
        <label for="name">Student username</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <input type="submit" value="Add student"/>
    <div class="button"><a href="/informatix/public/students/index/<?= $data["class_id"]?>">Back</a></div>
</div>
</form>
</body>
