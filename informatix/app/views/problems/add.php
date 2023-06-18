<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<form class="card form" action="/informatix/public/problems/add/" method="post">

    <div class="field">
        <label for="name">Problem name</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <div class="field">
        <label for="description">Problem description</label>
        <textarea name="description" id="description" value="" rows="4" required></textarea>
    </div>


    <input type="submit" value="Add problem"/>

</form>

<a href="/informatix/public/students/index/<?= $data["class_id"]?>">Back</a>