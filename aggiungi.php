<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="aggiungi.php" method="post">
        <p>INSERISCI UNA NUOVA PAROLA</p>
        <br>
        <input type="text" name="txtIns" id="txtIns">
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