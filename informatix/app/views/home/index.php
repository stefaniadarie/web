Home <?= $data['name'] . ' ' . $data['count'] ?><br/>

<!-- <?= $i ?>
for ($x = 0; $x < $data['count']; $x++) {
    echo $x;
}

?> -->

<!-- <table>
    <?php for($i = 0; $i < $data['count']; $i++) {?>
    <tr>
        <td><?= $data['problmes'][$i]->name ?></td>
        <td><?= $data['problmes'][$i]->description ?></td>
    </tr>
    <?php } ?>
</table> -->


<?php

// var_dump(Session::get($this->_sessionName));

// var_dump(Session::get(Config::get("session/session_name")));


if (Session::exists(Config::get("session/session_name"))) {
    echo 'logged';
    $user = Session::get(Config::get("session/session_name"));
    var_dump($user);
    if ($user) {
        echo $user->user_type;
    }
} else {
    echo 'not logged';
}

