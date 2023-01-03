<?php

declare(strict_types=1);

namespace Modules\Settings\Models\Panels\Actions;

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

class TestAction extends XotBasePanelAction {
    public bool $onContainer = true;
    public string $icon = '<i class="fa fa-edit"></i>';

    public function handle() {
        return $this->panel->view();
    }
}
