<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;
use Illuminate\Support\Carbon;
use App\Models\PublicationState;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicationState = PublicationState::where('slug', 'PUB')->first(); //ToDo model
        return (view('welcome', with(['publicationState' => $publicationState->practices])));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $day
     * @return \Illuminate\Http\Response
     */
    public function show($day)
    {
        Carbon::setLocale('fr');
        $publicationState = Practice::practicesGetByModifiedDate($day);
        return (view('welcome', with(['publicationState' => $publicationState, 'day' => $day],)));
    }
}
