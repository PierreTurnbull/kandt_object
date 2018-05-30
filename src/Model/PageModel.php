<?php
namespace Model;

use \Helper\Connection;

class PageModel
{
    private $connection = null;
    public function __construct()
    {
        $this->connection = Connection::get();
    }

    public function index()
    {
        $queryStr = "
            SELECT
                `title`,
                `id`
            FROM
                `page`
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}