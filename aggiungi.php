<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="width:100%;height:100vH;display:flex;justify-content:center;align-items:center">
    <form action="aggiungi.php" method="post" style="padding:15px;border:2px solid black;">
        <p>INSERISCI UNA NUOVA PAROLA</p>
        <br>
        <input type="text" name="txtIns" id="txtIns">
        <br>
        <br>
        <input type="submit" value="AGGIUNGI">
    </form>
    <?php
        if(isset($_POST["txtIns"]))
        {
            $parIns=$_POST["txtIns"];

            $user= 'root';
            $password= '';
            $database= 'paroleimpiccato';
            $servername= 'localhost:3306';

            $con= mysqli_connect($servername, $user, $password, $database);

            $query="INSERT INTO parole(Id,parola) VALUES (NULL,'$parIns');"; 

            mysqli_query($con,$query);
            
        }
        
        
    ?>
</body>
</html>