<?php

namespace App\Modules\AdministrativeUnitModule\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function getProperty(Request $request)
    {
        try {
            dd("Here");
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
