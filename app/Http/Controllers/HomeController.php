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
        $publicationState = PublicationState::where('slug', 'PUB')->first();
        return (view('welcome', with(['publicationState' => $publicationState->practices])));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($day)
    {
        
        Carbon::setLocale('fr');
        $publicationState = PublicationState::where('slug', 'PUB')->first()
            ->practices()->where('updated_at', '>=', Carbon::now()->subDays($day))->get();
        return (view('welcome', with(['publicationState' => $publicationState, 'day' => $day],)));
    }
}
