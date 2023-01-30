<?php

namespace app\View;

class ClientView
{
    public function drawList(array $data): void
    {
        echo "<table border='1'>";
        foreach ($data as $fila) {
            echo "<tr>";
            echo "<td><a href='/clientsdetail/" . $fila["CLIENTE_COD"] . "'>" . $fila["NOMBRE"] . "</a></td>";
            echo "<td>" . $fila["CIUDAD"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='/'> Menu Principal </a>";
    }

    public function drawDetail(array $data): void
    {
        echo "<table border='1'>";
        echo "<tr><td>" . $data["CLIENTE_COD"] . "</td> <td>" . $data["NOMBRE"] . "</td></tr>";
        echo "<tr><td>" . $data["DIREC"] . "</td> <td>" . $data["TELEFONO"] . "</td></tr>";
        echo "<tr><td>" . $data["LIMITE_CREDITO"] . "</td></tr>";
        echo "<tr><td>" . $data["OBSERVACIONES"] . "</td></tr>";
        echo "</table>";
        echo "<a href='/clients'> Lista de Clientes </a>";
    }
}