<?php

declare(strict_types=1);

namespace Modules\Settings\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class SettingsServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $module_name = 'settings';
}
