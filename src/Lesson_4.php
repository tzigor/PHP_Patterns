<?php
$pdo = new PDO('sqlite:' . __DIR__ . '/patterns.db');

class Record
{
    private string $record1;
    private int $record2;
    private float $record3;
}

class Criteria
{
    public $select;
    public $where;
}

abstract class AbstractFactory
{
    abstract public function DBConnection(): PDO;
    abstract public function DBRecrord(): Record;
    abstract public function DBQueryBuiler();
}

class MySQLFactory extends AbstractFactory
{
    public function DBConnection(): PDO
    {
        return new PDO('mysql:' . __DIR__ . '/patterns.db');
    }

    public function DBRecrord(): Record
    {
        // реализация метода для базы данных MySql
        return new Record;
    }

    public function DBQueryBuiler()
    {
        // реализация метода запроса для базы данных MySql
    }
}

class PostgreSQLFactory extends AbstractFactory
{
    public function DBConnection(): PDO
    {
        return new PDO('mysql:' . __DIR__ . '/patterns.db');
    }

    public function DBRecrord(): Record
    {
        // реализация метода для базы данных MySql
        return new Record;
    }

    public function DBQueryBuiler()
    {
        // реализация метода запроса для базы данных MySql
    }
}

class OracleFactory extends AbstractFactory
{
    public function DBConnection(): PDO
    {
        return new PDO('mysql:' . __DIR__ . '/patterns.db');
    }

    public function DBRecrord(): Record
    {
        // реализация метода для базы данных MySql
        return new Record;
    }

    public function DBQueryBuiler()
    {
        // реализация метода запроса для базы данных MySql
    }
}

class Data
{
    public function getData(AbstractFactory $abstractFactory)
    {
        $record = $abstractFactory->DBRecrord();
    }
}
