<table id="table">
    <tr>
        <th>user_id</th>
        <th>user_name</th>
        <th>user_email</th>
        <th>password</th>
        <th>date of birth</th>
    </tr>
    <?php
    include("connection.php");

    $q="Select * from user_information";
    $data=mysqli_query($con,$q);

    while($r=mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td><?php echo $r['user_id']?></td>
            <td><?php echo $r['user_name']?></td>
            <td><?php echo $r['user_email']?></td>
            <td><?php echo $r['password']?></td>
            <td><?php echo $r['date_of_birth']?></td>
            <td><a href="update.php?id=<?php echo $r['user_id']?>">update</a></td>
            <td><a href="delete.php?id=<?php echo $r['user_id']?>">delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>