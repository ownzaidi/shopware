<?php declare(strict_types=1);

namespace Swag\BasicExample\Service\ScheduledTask;

use Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskHandler;

class ExampleTaskHandler extends ScheduledTaskHandler
{
    public static function getHandledMessages(): iterable
    {
        return [ ExampleTask::class ];
    }

    public function run(): void
    {
        file_put_contents('/var/www/html/file.md', 'example');
    }
}