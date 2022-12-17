<?php

namespace Sabinico\BattleNetAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sabinico\BattleNetAPI\BattleNetAPI
 */
class BattleNetAPI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sabinico\BattleNetAPI\BattleNetAPI::class;
    }
}
