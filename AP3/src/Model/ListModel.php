<?php
namespace app\Model;

use PDO;
use app\Core\DataBase;

class ListModel extends DataBase
{
    public function getList()
    {
        $result = $this->conn->query("SELECT id, titulo, fecha_vencimiento FROM tareas");
        return $result->fetchall(PDO::FETCH_ASSOC);
    }
}
