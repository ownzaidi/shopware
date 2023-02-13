<?php declare(strict_types=1);

namespace Swag\BasicExample\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1673264808ExampleDescription extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1673264808;
    }

    public function update(Connection $connection): void
    {
        // implement update
        $query = <<<SQL
CREATE TABLE IF NOT EXISTS `example` (
    `id`                BINARY(16)             NOT NULL,
    `name`   VARCHAR(255)    NOT NULL,
    `nationality`   VARCHAR(255)    NOT NULL,
    `created_at` DATETIME(3)  NOT NULL,
    `updated_at` DATETIME(3),
    PRIMARY KEY (id)
)
    ENGINE = InnoDB
    DEFAULT CHARSET = utf8mb4
    COLLATE = utf8mb4_unicode_ci;
SQL;

        $connection->executeStatement($query);

    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
