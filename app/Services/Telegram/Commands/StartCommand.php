<?php
/**
 * Description of StartCommand.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace Longman\TelegramBot\Commands\SystemCommands;


use App\Services\Telegram\Handlers\Commands\StartCommandHandler;

class StartCommand extends BaseCommand
{
    protected $name = 'start';
    protected $usage = '/start';

    public function execute()
    {
        return app(StartCommandHandler::class)->handle($this);
    }
}
