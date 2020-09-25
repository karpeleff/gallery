<?php
namespace App;

use PDO;

class DB
{
    /** @var \PDO */
    private $pdo;

    public function __construct()
    {
        $dbOptions = (require 'settings.php')['db'];

        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
                  $dbOptions['user'],
                  $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    /**
     * @param string $sql
     * @param array $params
     * @return array|null
     */
    public function query(string $sql, $params = []): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if ($result === false )
        {
            return null;
        }

        return $sth->fetchAll();
    }
}