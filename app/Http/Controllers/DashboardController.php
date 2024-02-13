<?php

namespace App\Http\Controllers;

use App\Models\ChallengeParticipant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $response['total_participants_count'] = ChallengeParticipant::query()->count();
        $response['web_participants_count'] = ChallengeParticipant::query()->where('device', '!=', 'Mobile')->count();
        $response['mobile_participants_count'] = ChallengeParticipant::query()->where('device', 'Mobile')->count();
        $response['next_btn_count'] = ChallengeParticipant::query()->where('nextClick', 1)->count();
        $response['begin_challenge_click_count'] = ChallengeParticipant::query()->where('beginChallengeClick', 1)->count();
        $response['location_confirmed_click_count'] = ChallengeParticipant::query()->where('locationConfirmed', 1)->count();
        $response['fbshare_click_count'] = ChallengeParticipant::query()->where('fbshare', 1)->count();
        $response['wtshare_click_count'] = ChallengeParticipant::query()->where('wtshare', 1)->count();
        $response['twshare_click_count'] = ChallengeParticipant::query()->where('twshare', 1)->count();
        return view('dashboard', $response);
    }
    
    public function participantsList() {
        $participants = ChallengeParticipant::all();
        return view('participants.list', compact('participants'));
    }
}
