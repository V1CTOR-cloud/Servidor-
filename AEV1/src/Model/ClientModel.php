<?php
namespace app\Model;

use app\Core\Interfaces\IDataBase;

class ClientModel
{
    private IDataBase $dataBase;
    public function __construct(IDataBase $dataBase)
    {
        $this->dataBase = $dataBase;
    }
    public function getList(): array
    {
        return $this->dataBase->findAll("CLIENTE");  
    }

    public function getDetail(int $id): array
    {
        $result = $this->dataBase->find("CLIENTE","cliente_cod",$id);
        return array_shift($result);
    }
}