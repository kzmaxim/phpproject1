<?php

require "db.php";

//$insert = "INSERT INTO `test_db` (`name`, `gmail`, `data`) VALUES ('Марк', 'mark@gmail.com', '12.07.2015')";
//$update = "UPDATE `test_db` SET `description` = 'hello' WHERE `id` = 2";
//$delete = "DELETE FROM `test_db` WHERE `id` = 3";
$select = "SELECT `id`, `name`, `gmail`, `data` FROM `test_db`";

$query = mysqli_query($db, $select);
$team = mysqli_fetch_all($query, MYSQLI_ASSOC);
if ($query) { ?>
    <style>td {padding:10px;}</style>
    <h2>Наша команда</h2>
    <table style="text-align:center;">
        <thead style="background:#f5f5f5; border:1px;">
            <td>ID</td>
            <td>Name</td>
            <td>Gmail</td>
            <td>Date</td>
            <td>Delete</td>
            <td>Update</td>
        </thead>
    <?php
    }
    foreach($team as $member) { ?>
        <tr>
            <td><?php echo $member['id'] ?></td>
            <td><?php echo $member['name'] ?></td>
            <td><?php echo $member['gmail'] ?></td>
            <td><?php echo $member['data'] ?></td>
            <td><a href="/php/engine/delete.php?id_member=<?php echo $member['id'] ?>">Delete</a></td>
            <td><a href="/php/index.php?update_member=<?php echo $member['id'] ?>">Edit</a></td>
        </tr>
    <?php } 

    if(!empty($_GET['update_member'])) { ?>
        <h2>Редактировать члена команды</h2>
        <form action="engine/update.php" method="post">
            <?php foreach ($team as $member) {
                if ($member['id'] == $_GET['update_member']) { ?>
                <p><input type="text" name="name" value="<?php echo $member['name'] ?>"></p>
                <p><input type="text" name="gmail" value="<?php echo $member['gmail'] ?>"></p>
                <p><input type="text" name="data" value="<?php echo $member['data'] ?>"></p>
            <?php }
            } ?>
            <p><input type="hidden" name="id" value="<?php echo $_GET['update_member'] ?>"></p>
            <button type="submit">Submit</button>
        </form>
    <?php } else { ?>
    </table>
    <h2>Добавить нового члена команды</h2>
    <form action="engine/add.php" method="post">
        <p><input type="text" name="name"></p>
        <p><input type="text" name="gmail"></p>
        <p><input type="text" name="data"></p>
        <button type="submit">Submit</button>
    </form>
    <?php } ?>
