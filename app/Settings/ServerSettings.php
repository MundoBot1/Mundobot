<?php

namespace app\Settings;

use Spatie\LaravelSettings\Settings;

class ServerSettings extends Settings
{
    public int $allocation_limit;

    public bool $creation_enabled;

    public bool $enable_upgrade;

    public static function group(): string
    {
        return 'server';
    }
}