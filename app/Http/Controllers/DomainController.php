<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Models\Practice;

class DomainController extends Controller
{
    public function index()
    {
        $test = 'Test';
        return view('domain.home', ['test' => $test]);
    }

    public function showById($id)
    {
        return view('domain.domain');
    }
}
