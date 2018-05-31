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
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function edit(int $index): array
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
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete(int $index): array
    {
        $queryStr = "
            SELECT
                `id`,
                `title`
            FROM
                `page`
            WHERE
                `id` = :id
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->bindValue(":id", $index);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function doEdit(array $data)
    {
        $queryStr = "
            UPDATE
                `page`
            SET
                `title` = :title,
                `h1` = :h1,
                `p` = :p,
                `span-class` = :spanClass,
                `span-text` = :spanText,
                `img-alt` = :imgAlt,
                `img-src` = :imgSrc
            WHERE
                `id` = :id;
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->bindValue(":title", $data["title"]);
        $stmt->bindValue(":h1", $data["h1"]);
        $stmt->bindValue(":p", $data["p"]);
        $stmt->bindValue(":spanClass", $data["span-class"]);
        $stmt->bindValue(":spanText", $data["span-text"]);
        $stmt->bindValue(":imgAlt", $data["img-alt"]);
        $stmt->bindValue(":imgSrc", $data["img-src"]);
        $stmt->bindValue(":id", $data["id"]);
        $stmt->execute();
        header("Location: " . \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.index");
        exit;
    }

    public function doDelete(int $index)
    {
        echo "doing delete";
        $queryStr = "
            DELETE FROM
                `page`
            WHERE
                `id` = :id
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->bindValue(":id", $index);
        $stmt->execute();
        header("Location: " . \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.index");
        exit;
    }

    public function doCreate(array $data)
    {
        $queryStr = "
            INSERT INTO
                `page`
            SET 
                `title` = :title,
                `h1` = :h1,
                `p` = :p,
                `span-class` = :spanClass,
                `span-text` = :spanText,
                `img-alt` = :imgAlt,
                `img-src` = :imgSrc
        ";
        $stmt = $this->connection->prepare($queryStr);
        $stmt->bindValue(":title", $data["title"]);
        $stmt->bindValue(":h1", $data["h1"]);
        $stmt->bindValue(":p", $data["p"]);
        $stmt->bindValue(":spanClass", $data["span-class"]);
        $stmt->bindValue(":spanText", $data["span-text"]);
        $stmt->bindValue(":imgAlt", $data["img-alt"]);
        $stmt->bindValue(":imgSrc", $data["img-src"]);
        $stmt->execute();
        header("Location: " . \KANDT_ROOT_URI . \KANDT_ACTION_PARAM . "=page.index");
        exit;
    }
}
