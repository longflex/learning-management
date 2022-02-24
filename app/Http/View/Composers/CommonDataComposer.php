<?php

namespace App\Http\View\Composers;

use App\CountryName;
use Illuminate\View\View;

class CommonDataComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $countrynames = CountryName::countrynames();
        
        $view->with('country_names', $countrynames);
    }
}