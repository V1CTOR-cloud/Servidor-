<?php

namespace app\Core\Interfaces;

interface IDataBase
{
    public function executeSQL(string $sql): array;

    public function findAll(string $table_name): array;

    public function find(string $table_name,string $campo_clave ,int $id): array;
}
