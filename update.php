<?php

include "config.php";

if (isset($_POST['update'])) {
    
    $id = $_POST['id'];

    $firstName = $_POST['firstName'];

    $lastName = $_POST['lastName'];

    $email = $_POST['email'];

    $sql = "UPDATE `People` SET `firstname`='$firstName',`lastname`='$lastName',`email`='$email' WHERE `id`='$id'";

    $result = $conn->query($sql);

}

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "SELECT * FROM `People` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];

            $firstName = $row['firstname'];

            $lastName = $row['lastname'];

            $email = $row['email'];

            $date = $row['reg_date'];
        }

        ?>
        <html>

        <head>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        </head>

        <body>
            <div class="container">
                <h2 style="text-align: center;">Editing</h2>
                <form action="" method="post">

                    <fieldset>

                        <legend>PEOPLE:</legend>

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        First Name:
                        <br>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $firstName; ?>">
                        <br>

                        Last Name:
                        <br>
                        <input type="text" class="form-control" name="lastName" value="<?php echo $lastName; ?>">
                        <br>

                        Email Name:
                        <br>
                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                        <br>
                        <br>

                        <input type="submit" class="btn btn-success" value="Update" name="update">
                        <a class="btn btn-primary" href="create.php" role="button">go back</a>
                    </fieldset>

                </form>
            </div>
        </body>

        </html>
        <?php

    } else {

        header('Location: view.php');

    }

}

?>