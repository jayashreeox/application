
<html>
    <head>
        <meta charset="UTF-8">
        <title>HomePage</title>
        <link rel="stylesheet" type="text/css" href="cssJquery.css">
    </head>

    <div><header>HOME_PAGE</header></div>
    <div class="overall">
        <div id="buttons">
            <a href="register.php"><input type="submit" value="REGISTER"></a>
            <a href="login.php"><input type="submit" value="LOGIN"></a>
        </div>
        <div id="tab">
            <?php
            $datab = mysqli_connect("localhost", "root", "admin@123", "phpDB");
            $query = "SELECT name, email , mobile, gender FROM cus_details";
            $result = mysqli_query($datab, $query);
            echo "<table width='100%' border='2px'><th>NAME</th><th>EMAIL</th><th>MOBILE</th><th>GENDER</th>";
            while ($data = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo '<td>' . $data['name'] . '</td>';
                echo '<td>' . $data['email'] . '</td>';
                echo '<td>' . $data['mobile'] . '</td>';
                echo '<td>' . $data['gender'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            mysqli_close($datab);
            ?>
        </div>
    </div>
</body>
</html>
