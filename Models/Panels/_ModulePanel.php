<?php

declare(strict_types=1);

namespace Modules\Settings\Models\Panels;

use Modules\Xot\Models\Panels\XotBasePanel;

class _ModulePanel extends XotBasePanel {
    public function actions(): array {
        return [
            //   new Actions\TestAction(),
        ];
    }
}
