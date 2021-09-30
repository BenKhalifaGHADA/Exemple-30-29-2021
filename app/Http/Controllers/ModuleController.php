<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
public function affiche()
{
    $listmodules=Module::all();//Select * from Module
    return view("Module.index",compact("listmodules"));//'listModule"=>$listModule
}

}
