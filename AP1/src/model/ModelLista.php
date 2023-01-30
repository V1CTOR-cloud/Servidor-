<?php
namespace app\model;
use app\core\Connection;

class ModelLista extends Connection {
    public function getLista(){
        try {
            $sql = 'SELECT * FROM tareas';
            $result = $this->conn->query($sql);

            foreach ($this->conn->query($sql) as $row){
                print $row['id']. '<br>';
                print $row['titulo']. '<br>';
                print $row['descripcion']. '<br>';
                print $row['fecha_creacion']. '<br>';
                print $row['fecha_vencimiento']. '<br> <br>';
            }
        } catch (Exception $e) {
            $e->getMessage(). "\n";
        }

    }

    public function getListaDetail($number){
        try {
            $sql = 'SELECT * FROM tareas WHERE id= ' .$number;
            
            foreach ($this->conn->query($sql) as $row){
                print $row['id']. '<br>';
                print $row['titulo']. '<br>';
                print $row['descripcion']. '<br>';
                print $row['fecha_creacion']. '<br>';
                print $row['fecha_vencimiento']. '<br> <br>';
            }
        } catch (Exception $e) {
            $e->getMessage(). "\n";
        }
    }
}
?>