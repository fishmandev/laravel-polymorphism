<?php

namespace App\Http\Controllers;

use App\Services\Calculator;
use Illuminate\Http\Response;

class DefaultController extends Controller
{
    /**
     * @param Calculator $cal
     * @return Response
     * @throws \Exception
     */
    public function index(Calculator $cal): Response
    {
        return response(['result' => $cal->getResult()]);
    }
}
