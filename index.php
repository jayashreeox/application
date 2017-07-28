<?php
session_start();
if($_SESSION['name'])
{
    header('location:userinfo.php');
}

?>
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
            $query = "SELECT cus_id,name, email , mobile, gender,profile FROM cus_details";
            $result = mysqli_query($datab, $query);
            echo "<table width='100%' border='2px'><th>ID</th><th>NAME</th><th>EMAIL</th><th>MOBILE</th><th>GENDER</th><th>PROFILE</th>";
            while ($data = mysqli_fetch_array($result)) {
                echo '<tr>';
                 echo '<td>' . $data['cus_id'] . '</td>';
                echo '<td>' . $data['name'] . '</td>';
                echo '<td>' . $data['email'] . '</td>';
                echo '<td>' . $data['mobile'] . '</td>';
                echo '<td>' . $data['gender'] . '</td>';
                echo "<td><img src='".$data['profile']."'/></td>";
                echo '</tr>';
            }
            echo '</table>';
            mysqli_close($datab);
            ?>
        </div>
    </div>
</body>
</html>
