<html>
    <head>
        <title>Dashbord</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body>
        <div>
            <?php include 'Header.php'; ?>
        </div>
            <h1>Dashbord</h1>
            <div class="div12">
            <p class="p1">hello</p>
        </div>
            <?php
                include 'Connect.php';
                $sql = "SELECT sum(Quantity) AS quantity FROM stockitem";
                $result = $con->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                    $quantity = $row["quantity"];
                    echo '<div class="div12">';
                    echo "<h1>Stock</h1>";
                    echo "<h3>".$quantity ."</h3>";
                    echo '</div>';
                }
            ?>
        
        <div>
            <?php include 'Footer.php'; ?>
        </div>
    </body>
</html>