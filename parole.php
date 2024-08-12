<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods:POST,GET,OPTIONS");

    $user= 'root';
    $password= '';
    $database= 'paroleimpiccato';
    $servername= 'localhost:3306';

    $con= mysqli_connect($servername, $user, $password, $database);
    
    if(isset($_POST["estrai"]))
    {
        $query="SELECT parola FROM parole"; 

        if($paperino= mysqli_query($con,$query))
        {
            $i=0;
            $v_risposta=array();
            while($row = mysqli_fetch_row($paperino))
            {
                $v_risposta[$i]= $row[0];
                $i++;
            }
            echo json_encode($v_risposta);           
        }

    }
    

?>