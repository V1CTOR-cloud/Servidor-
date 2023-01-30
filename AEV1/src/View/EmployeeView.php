<?php

namespace app\View;

class EmployeeView
{
    public function drawList(array $data): void
    {
        echo "<table border='1'>";
        foreach ($data as $fila) {
            echo "<tr>";
            echo "<td><a href='/employeesdetail/" . $fila["EMP_NO"] . "'>" . $fila["APELLIDOS"] . "</a></td>";
            echo "<td>" . $fila["OFICIO"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='/'> Menu Principal </a>";
    }

    

    public function drawDetail(array $data): void
    {
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>". $data["EMP_NO"]. "</td>";
        echo "<td>". $data["APELLIDOS"]. "</td>";
        echo "<td>". $data["OFICIO"]. "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>FECHA ALTA: ". $data["FECHA_ALTA"]. "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>SALARIO: ". $data["SALARIO"]. " €</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>COMISIÓN: ". $data["COMISION"]. "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<a href='/employees'> Lista de Empleados </a>";
    }
}