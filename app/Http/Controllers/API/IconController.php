<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Icon;
use Illuminate\Http\Response;

class IconController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $icons = Icon::all();

        return $this->sendResponse($icons->toArray(), 'Icons retrieved successfully.');
    }
}
