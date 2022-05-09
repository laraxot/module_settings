<?php

declare(strict_types=1);

namespace Modules\Settings\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

class SettingsPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Settings\Models\Settings';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    public function fields(): array {
        return [
            (object) ([
                'type' => 'Text',
                'name' => 'appname',
                'comment' => 'not in Doctrine',
            ]),
            (object) ([
                'type' => 'Text',
                'name' => 'description',
                'comment' => 'not in Doctrine',
            ]),
            (object) ([
                'type' => 'Text',
                'name' => 'keywords',
                'comment' => 'not in Doctrine',
            ]),
            (object) ([
                'type' => 'Text',
                'name' => 'author',
                'comment' => 'not in Doctrine',
            ]),
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs():array {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request):array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function filters(Request $request = null):array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request):array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function actions(Request $request = null):array {
        return [
            new Actions\TestAction(),
        ];
    }
}
