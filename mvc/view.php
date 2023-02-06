<html>
<head>
    <title>MVC by Abbas Ali Butt</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
        </tr>
        <?php foreach($customers as $customer): ?>
            <tr>
                <td>
                    <a href="index.php?customer=<?= $customer->id; ?>"><?= $customer->id; ?></a>
                </td>
                <td><?= $customer->firstName; ?></td>
                <td><?= $customer->lastName; ?></td>
                <td><?= $customer->email; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
