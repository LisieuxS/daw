<?php

require_once("util.php");
$result = seleccionarIncidente();

if (mysqli_num_rows($result)>0)
{
    echo "<table style = 'text-align:center;' class = 'stripped white-text'>
    <tr>
        <td style = 'text-align:center;background:#1a237e'>Fecha</td>
        <td style = 'text-align:center;background:#1a237e'>Incidente</td>
        <td style = 'text-align:center;background:#1a237e'>Lugar</td>
        </tr>
        ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "
        <tr>
        <td style = 'text-align:center;color:black'>".$row['fecha']."</td> 
        <td style = 'text-align:center;color:black'>".$row['nombreI']."</td>
        <td style = 'text-align:center;color:black'>".$row['nombrel']."</td> 
        </tr>";
    }
    echo "</table>";
}
echo "<a href='../index.php' class='btn indigo darken-4'>Regresar a Inicio</a>";

?>