<?php

namespace App\Http\Filters;

use Agog\Osmose\Library\OsmoseFilter;
use Agog\Osmose\Library\Services\Contracts\OsmoseFilterInterface;

class UserFilter extends OsmoseFilter implements OsmoseFilterInterface
{
    /**
     * Defines form elements and sieve values
     * @return array
     */
    public function residue () :array
    {
        return [

        ];
    }
}
