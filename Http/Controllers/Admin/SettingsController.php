<?php
namespace Modules\Settings\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use Modules\Extend\Services\ThemeService;
//--- traits
use Modules\Extend\Traits\ArtisanTrait;
//-------- Models ----------------

/*--move to seo

*/
/*
use Modules\Extend\Packages;
use Modules\Settings\Models\Settings;
use Modules\Settings\Settings as Setts;
*/

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->act=='routelist') {
            return ArtisanTrait::exe('route:list');
        }

        $view = ThemeService::getView();

        return view($view);
    }
}
