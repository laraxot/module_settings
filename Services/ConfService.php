<?php

declare(strict_types=1);

namespace Modules\Settings\Services;

use Modules\Tenant\Services\TenantService;
use Modules\Xot\Services\ArrayService;

class ConfService {
    public static function set(array $params): array {
        $name = '';
        $data = [];
        extract($params);
        $tenant = TenantService::getName();
        $test = config($tenant.'.'.$name);

        if (null == $test) {
            $full_name = $name;
            $filename = base_path('config/'.$name.'.php');
        } else {
            $full_name = $tenant.'.'.$name;
            $filename = base_path('config/'.$tenant.'/'.$name.'.php');
        }
        $filename = str_replace(['/', '\\'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $filename);
        ArrayService::save(['filename' => $filename, 'data' => $data]);

        return ['filename' => $filename, 'full_name' => $full_name];
    }
}