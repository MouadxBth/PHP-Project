<?php

include_once("config.php");

$sql = "SELECT * FROM People";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>People</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>REGISTERED PEOPLE :</h2>

        <table class="table table-striped">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>FULL NAME</th>

                    <th>EMAIL</th>

                    <th>REGISTRATION DATE</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td>
                                <?php echo $row['firstname'] . " " . $row['lastname']; ?>
                            </td>

                            <td>
                                <?php echo $row['email']; ?>
                            </td>

                            <td><?php echo $row['reg_date']; ?></td>

                            <td>
                                <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                &nbsp;
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>

                        </tr>

                    <?php }

                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>