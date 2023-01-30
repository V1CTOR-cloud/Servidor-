<?php

namespace app\View;

class ListView
{
    public function drawList($data)
    {
        echo "<table border='1'>";
        foreach ($data as $fila) {
            echo "<tr>";
            echo "<td><a href='/detail/" . $fila["id"] . "'>" . $fila["titulo"] . "</a></td>";
            echo "<td>" . $fila["fecha_vencimiento"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
