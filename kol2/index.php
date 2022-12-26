<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "studenti";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <h3>Вработени</h3>
    <hr>
    <h3>Испечати вработени според избор :</h3>
    <select  name="plati" size="3">
        <option value="min">Минимална</option>
        <option value="sr">Средна</option>
        <option value="visoka">Висока</option>
      </select><br>
      <input type="submit" name="submit2" value="Прикажи">
      </form>
</body>
</html>
<?php if(isset($_POST['submit2'])){
    $selected = $_POST['plati'];
    switch($selected)
    {
      case "min": ?>
        <table>
        <tr>
             <th>ID</th>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "vraboteni";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);
                $query = "SELECT * FROM vraboteni WHERE plata < 14500";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){

                    $id = $row['id'];

                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $kod = $row['kod'];
                
                    $plata = $row['plata'];
                
                    $telefon = $row['telefon'];
    
                    echo "<tr>";
    
                    echo "<td>$id</td>";

                    echo "<td>$ime</td>";
                
                    echo "<td>$prezime</td>";
                
                    echo "<td>$kod</td>";
                
                    echo "<td>$plata</td>";
                
                    echo "<td>$telefon</td>";
                
                    echo "</tr>";
                
                    }?>
    </table> <?php
        break;
        case "sr": 
        ?>
                <table>
        <tr>
             <th>ID</th>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "vraboteni";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);

                $query = "SELECT * FROM vraboteni WHERE plata > 14500 && plata < 30000";

                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];

                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $kod = $row['kod'];
                
                    $plata = $row['plata'];
                
                    $telefon = $row['telefon'];
    
                    echo "<tr>";
    
                    echo "<td>$id</td>";

                    echo "<td>$ime</td>";

                    echo "<td>$prezime</td>";
                
                    echo "<td>$kod</td>";
                
                    echo "<td>$plata</td>";
                
                    echo "<td>$telefon</td>";
                
                    echo "</tr>";
                
                    }?>
    </table><?php
        break;
      case "visoka": 
        ?>
                        <table>
        <tr>
             <th>ID</th>
             <th>ID</th>
             <th>name</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
             <th>embg</th>
            </tr>
            <?php
                $hostName = "localhost";
                $userName = "root";
                $password = "";
                $databaseName = "vraboteni";
                $conn = new mysqli($hostName, $userName, $password, $databaseName);

                $query = "SELECT * FROM vraboteni WHERE plata > 30000";

                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];

                    $ime = $row['ime'];
    
                    $prezime = $row['prezime'];
                
                    $kod = $row['kod'];
                
                    $plata = $row['plata'];
                
                    $telefon = $row['telefon'];
    
                    echo "<tr>";
    
                    echo "<td>$id</td>";

                    echo "<td>$ime</td>";
                
                    echo "<td>$prezime</td>";
                
                    echo "<td>$kod</td>";
                
                    echo "<td>$plata</td>";
                
                    echo "<td>$telefon</td>";
                
                    echo "</tr>";
                
                    }?>
    </table><?php
         break;
      default: echo("Error!"); exit(); break;
    }}
 ?>




