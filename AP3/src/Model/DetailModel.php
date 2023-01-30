<?php
namespace app\Model;

use PDO;
use app\Core\DataBase;

class DetailModel extends DataBase
{
    public function getDetail($id)
    {
        $result = $this->conn->query("SELECT * FROM tareas WHERE id=$id");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
