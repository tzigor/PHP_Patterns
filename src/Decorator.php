<?php

interface QueryInterface
{
    public function query($sql);
}

class Db implements QueryInterface
{
    public function query($sql)
    {
    }
}

class Mail implements QueryInterface
{
    protected $db;

    public function __construct(QueryInterface $db)
    {
        $this->db = $db;
    }

    public function query($sql)
    {
        $this->mail(to: "", subject: "", message: "");
        return $this->db->query($sql);
    }
}

class Push implements QueryInterface
{
    protected $db;

    public function __construct(QueryInterface $db)
    {
        $this->db = $db;
    }

    public function query($sql)
    {
        $this->push(to: "", subject: "", message: "");
        return $this->db->query($sql);
    }
}

$db = new Mail(new Push(new Db()));

$db->query(sql: "");
