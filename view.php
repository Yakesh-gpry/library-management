<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <title>Library Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <style type="text/css">
        .paging-nav {       
            text-align: right;
            padding-top: 50px;
        }

        .paging-nav a {
            margin: auto 1px;
            text-decoration: none;
            display: inline-block;
            padding: 1px 7px;
            background: #91b9e6;
            color: white;
            border-radius: 3px;
        }

        .paging-nav .selected-page {
            background: #187ed5;
            font-weight: bold;
        }

        .paging-nav,
        #tableData {
            width: 100%;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
    </style>
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
            <div class="container mt-3">

                <table id="tableData" class="table table-hover table-striped ">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Subject</th>
                            <th>Published Date</th>
                            <th>Book</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = fopen("data.bin", "r");
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
                                <td><?= $ar[3] ?></td>
                                <td><a href="<?= $ar[4] ?>">View</a></td>


                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                <script type="text/javascript" src="paging.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#tableData').paging({
                            limit: 10
                        });
                    });
                </script>
                <script type="text/javascript">
                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-36251023-1']);
                    _gaq.push(['_setDomainName', 'jqueryscript.net']);
                    _gaq.push(['_trackPageview']);

                    (function() {
                        var ga = document.createElement('script');
                        ga.type = 'text/javascript';
                        ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(ga, s);
                    })();
                </script>



</body>

</html>