<?php

namespace app\View;

class MainView
{
    public function drawLinks(): void
    {
        echo "<a href='/clients'> Clientes </a><br>";
        echo "<a href='/employees'> Empleados </a>";
    }
}