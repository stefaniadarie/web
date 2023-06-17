<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>


<form action="/informatix/public/solutions/add/<?= $data["problem"]->id ?>" method="post">
    <h3>
        <?= $data["problem"]->description ?>
</h3>

    <div class="field">
        <label for="Solution">Solution</label>
        <textarea name="description" id="description" value="" rows="4" required></textarea>
    </div>


    <p class="v-data">Rate the problem's difficulty from 1 (very difficult) to 5 (very easy):
        <select id="valoare" name="valoare">
            <option value="op1">1</option>
            <option value="op2">2</option>
            <option value="op3">3</option>
            <option value="op4">4</option>
            <option value="op5">5</option>
        </select>
    </p>

    <input type="submit" value="Submit" />
    <a href="/informatix/public/problems/">Cancel</a>

</form>