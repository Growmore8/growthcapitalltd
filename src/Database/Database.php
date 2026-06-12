<?php

declare(strict_types=1);

namespace GrowthCapital\Database;

use PDO;
use PDOException;

/**
 * PDO connection factory (singleton).
 *
 * Used by the login/register system once authentication is implemented.
 * Credentials come from /config/config.php.
 */
final class Database
{
    private static ?PDO $instance = null;

    private function __construct()
    {
    }

    /**
     * @param array<string, mixed> $config The 'db' section of the app config.
     */
    public static function connection(array $config): PDO
    {
        if (self::$instance instanceof PDO) {
            return self::$instance;
        }

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            $config['host'] ?? '127.0.0.1',
            $config['port'] ?? '3306',
            $config['name'] ?? '',
            $config['charset'] ?? 'utf8mb4'
        );

        try {
            self::$instance = new PDO(
                $dsn,
                $config['user'] ?? 'root',
                $config['pass'] ?? '',
                [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]
            );
        } catch (PDOException $e) {
            // Avoid leaking credentials/DSN in production output.
            throw new \RuntimeException('Database connection failed.', 0, $e);
        }

        return self::$instance;
    }
}
