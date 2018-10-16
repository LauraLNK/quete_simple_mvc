<?php
namespace Model;
use Model\Category;

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Category $category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`name`) VALUES (:name)");
        $statement->bindValue('name', $category->getName(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }

    }
	public function delete(int $id): int
	{
		$statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE " . "id = :id LIMIT 1");
		$statement->bindValue(':id', $id->selectOnById(), \PDO::PARAM_STR);
		$statement->execute();
	}

	public function update(category $category): string
	{
		$statement = $this->pdo->prepare("UPDATE " . self::TABLE . SET . "");
		$statement->bindValue('id', $category->getName(), \PDO::PARAM_STR);
		$statement->execute();
	}
}
