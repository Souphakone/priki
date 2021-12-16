<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Models\Practice;
use Illuminate\Support\Facades\Session;

class DomainController extends Controller
{
    public function index()
    {
        $practices = Practice::orderBy('domain_id')->get();
        return view('domain.home', ['practices' => $practices]);
    }

    public function showById($id)
    {
        Session::put('domainId', $id);
        $practices = Practice::all()->where('domain_id', '=', $id); //Todo Model
        $domainName = Domain::find($id)->name;
        return view('domain.domain', ['practices' => $practices, 'domainName' => $domainName]);
    }
}
