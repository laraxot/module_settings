<?php

declare(strict_types=1);

namespace Modules\Settings\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//--- services
use Illuminate\Contracts\Support\Renderable;
use Modules\Theme\Services\ThemeService;

class ListaController extends Controller {
    public function index(): Renderable {
        //dd(\Lang::localeArray(false));
        //dd(__());
        $trans = trans();
        $rows = $trans->getLoader()->namespaces();
        $view = ThemeService::getView();
        $view_params = [
            'view' => $view,
            'rows' => $rows,
            'lang' => app()->getLocale(),
        ];

        return view()->make($view, $view_params);
        //return view($view)->with('view', $view)->with('rows', $rows)->with('lang', app()->getLocale());
        /*
    	dd($trans_namespaces);
    	dd(\Lang::get('food'));
    	*/
        //dd(trans('food::'));
        /*
    	dd($trans_loader);
    	$trans_hints=$trans_loader->hints;
    	dd($trans_hints);
    	dd(\Lang::get('pub_theme::restaurant'));
    	*/
    }
}