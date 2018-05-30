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

    public function index(): array
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

    public function show(int $index): array
    {
        $queryStr = "
            SELECT
                `id`,
                `title`,
                `h1`,
                `p`,
                `span-class`,
                `span-text`,
                `img-alt`,
                `img-src`
            FROM
                `page`
            WHERE
                `id` = :id
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->bindValue(":id", $index);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}