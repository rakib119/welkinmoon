<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FatherInfo;
use App\Models\MotherInfo;
use App\Models\PersonalInfo;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        $teams =  Team::all();
        $messages =  Contact::where('status', 0)->orderBy('id', 'DESC')->get();
        return view('dashboard.home.index', compact('users', 'teams', 'messages'));
    }
    public function users()
    {
        $users =  User::orderBy('id', 'DESC')->get();
        return view('dashboard.users', compact('users'));
    }
    public function userDetails($id)
    {
        // $has_p_info = PersonalInfo:: where('user_id',$id)->count();
        // $has_f_info = FatherInfo:: where('user_id',$id)->count();
        // $has_m_info = MotherInfo:: where('user_id',$id)->count();

        // $personal_info =  PersonalInfo:: where('user_id',$id)->first();
        // $father_info =  FatherInfo:: where('user_id',$id)->first();
        // $mother_info =  MotherInfo:: where('user_id',$id)->first();
        $user = User::where('id', $id)->first();
        return view('dashboard.information.all_Information', compact('user'));
    }
}
