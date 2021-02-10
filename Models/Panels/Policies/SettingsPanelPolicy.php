<?php

namespace Modules\Settings\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

class SettingsPanelPolicy extends XotBasePanelPolicy {
    public function test($user,$panel){

        return true;
    }
}
