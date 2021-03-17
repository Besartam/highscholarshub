<?php
require 'config/dbconnect.php';

$query = $pdo->query('SELECT * from users');
$users = $query->fetchAll();
?>

<div>
<a href="add_users.php">Add new users</a>
<table>
    <thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><a href="single_user.php?id=<?php echo $user['id']; ?>">Show</a> </td>
        <td><a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a> </td>
        <td><a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a> </td>
        </tr>
        <?php endforeach; ?>
    </tbody>                   
</table>

</div>