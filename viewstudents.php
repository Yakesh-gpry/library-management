<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="full-bar">
        <div class="navi">
            <?php
            include "sidebar.php";
            ?>
        </div>
        <div class="content">
            <center>
                <h1 class="heading">Library Management System</h1>
            </center>
            <table id="tableData" class="table table-hover table-striped ">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Department</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = fopen("studata.bin", "r");
                        $i = 0;
                        while (!feof($db)) {
                            $line = fgets($db);
                            $ar = explode(" | ", $line);
                            $i++;

                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $ar[0] ?></td>
                                <td><?= $ar[1] ?></td>
                                <td><?= $ar[2] ?></td>
                                


                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

        </div>

    </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>