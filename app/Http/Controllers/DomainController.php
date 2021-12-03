<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Models\Practice;

class DomainController extends Controller
{
    public function index()
    {
        $practices = Practice::orderBy('domain_id')->get();
        return view('domain.home', ['practices' => $practices]);
    }

    public function showById($id)
    {
        $practices = Practice::all()->where('domain_id', '=', $id);
        return view('domain.domain', ['practices' => $practices]);
    }
}
