<?php

namespace app\Model;

use app\Core\Interfaces\IDataBase;

class EmployeeModel
{
    private IDataBase $dataBase;
    public function __construct(IDataBase $dataBase)
    {
        $this->dataBase = $dataBase;
    }
    public function getList(): array
    {
        return $this->dataBase->findAll("EMP");
    }

    public function getDetail(int $id): array
    {
        $result = $this->dataBase->find("EMP", "EMP_NO", $id);
        return array_shift($result);
    }
}
