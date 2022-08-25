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
            <div class="form">
                <form>
                    <div class="mb-3 mt-3 w-75">
                        <label>Book Title</label>
                        <input type="text" class="form-control" placeholder="Enter Book Title" name="btitle" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label>Keywords</label>
                        <input type="text" class="form-control" placeholder="Enter Keyword" name="keys" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label>Upload File</label><br><br>
                        <input type="file" class="form-control-file border" name="efile" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>

        </div>

    </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>