<?php

namespace App\Http\Controllers;

use App\Models\AboutFifth;
use App\Models\AboutFirst;
use App\Models\AboutFourth;
use App\Models\Aboutsecond;
use App\Models\AboutThird;
use App\Models\AfterCcd;
use App\Models\faq;
use App\Models\home_second_left;
use App\Models\home_second_right;
use App\Models\HomeProject;
use App\Models\Icon;
use App\Models\NextAfterCcd;
use App\Models\OurStory;
use App\Models\Project;
use App\Models\ServiceFirst;
use App\Models\ServiceSecond;
use App\Models\Slider;
use App\Models\StorySecond;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{

     public function index()
    {
        return view('fontend.index',[
           'teams'=> Team::all(),
           'ceo'=> Team::where('post', 'Chief Director')->first(),
           'faqs'=> faq::all(),
           'sliders'=> Slider::take(3)->get(),
           'home_second_left'=> home_second_left::first(),
           'home_second_right'=> home_second_right::orderBy('id','DESC')->take(6)->get(),
           'after_ccd'=> AfterCcd::first(),
           'next_after_ccd'=> NextAfterCcd::first(),
           'projects'=> HomeProject::all(),
        ]);
    }
    public function about()
    {
        return view('fontend.about',[
            'first_items'=>AboutFirst::all(),
            'second_item'=>Aboutsecond::first(),
            'third_items'=>AboutThird::orderBy('id','DESC')->take(4)->get(),
            'fifth_items'=>AboutFifth::orderBy('id','DESC')->get(),
            'fourth_item'=>AboutFourth::first(),
            'next_after_ccd'=> NextAfterCcd::first(),
        ]);
    }
    public function aboutBlogDetails($id)
    {
        $id = Crypt::decryptString($id);
        $blog = AboutFirst::find($id);
        $about_blog = $blog->blog_details;
        if ($about_blog) {
            return view('fontend.about_blog_details',compact('about_blog'));
        }else{
            return back();
        }
    }

    public function team()
    {
        $teams = Team::all();
        return view('fontend.team', compact('teams'));
    }
    public function ourProjects()
    {
        return view('fontend.projects',[
            'projects'=> Project::all()
        ]);
    }
    public function contactUs()
    {
        return view('fontend.contact');
    }
     public function sliderDetails($id)
    {
        $id = Crypt::decryptString($id);
        $slider = Slider::find($id);
        if ($slider->slider_details) {
            return view('fontend.slider_details',compact('slider' ));
        }else{
            return redirect()->route('home');
        }


    }

    public function profile(){
        $info = User::where('id',auth()->id())->first();
        return view('fontend.profile',compact('info' ));
    }

    public function service(){
        return view('fontend.service',[
            'serviceFirst'=> ServiceFirst::first(),
            'ServiceSecond'=> ServiceSecond::all()
        ]);
    }
    public function ourStory (){
        // return OurStory::all();
        return view('fontend.ourstory',[
            'story'=>OurStory::all(),
            'blogs'=>StorySecond::all(),
        ]);
    }
    public function StoryBlogDetails($id)
    {
        $id = Crypt::decryptString($id);
        $blog = StorySecond::find($id);
        $story_blog = $blog->blog_details;
        if ($story_blog) {
            return view('fontend.story_blog_details',compact('story_blog'));
        }else{
            return back();
        }
    }
     public function test()
    {
    // $icons = ['flaticon-gamepad-controller','flaticon-telephone-auricular-with-cable','flaticon-winner-champion-trophy','flaticon-left-arrow-chevron','flaticon-fighting-weapon-target','flaticon-magnifying-glass','flaticon-delete','flaticon-check-mark-black-outline','flaticon-twitter-letter-logo','flaticon-facebook-placeholder-for-locate-places-on-maps','flaticon-link-symbol','flaticon-data-analytics-circular-graphic','flaticon-chat-comment-oval-speech-bubble-with-text-lines','flaticon-team','flaticon-shopping-cart-silhouette','flaticon-scale-in-balance','flaticon-tick-inside-circle','flaticon-update-arrow','flaticon-message-closed-envelope','flaticon-global-service','flaticon-medium-size','flaticon-dart-board','flaticon-float','flaticon-favorite-place','flaticon-pie-chart','flaticon-meeting','flaticon-play-button','flaticon-user','flaticon-user-1','flaticon-email','flaticon-shopping-basket','flaticon-info','flaticon-like','flaticon-search','flaticon-app','flaticon-info-1','flaticon-presentation','flaticon-calendar','flaticon-video-player','flaticon-customer','flaticon-down-arrow','flaticon-left-arrow','flaticon-right-arrow','flaticon-alert','flaticon-promotion','flaticon-analytics','flaticon-link','flaticon-networking','flaticon-megaphone','flaticon-startup','flaticon-megaphone-1','flaticon-call','flaticon-facebook','flaticon-twitter','flaticon-youtube','flaticon-user-2','flaticon-compass','flaticon-case','flaticon-newspaper','flaticon-app-store','flaticon-information','flaticon-guarantee','flaticon-telegram','flaticon-design','flaticon-usability','flaticon-launch','flaticon-heart','flaticon-rocket-3','flaticon-c','flaticon-link-1','flaticon-award','flaticon-statistics','flaticon-vision','flaticon-smartphone','flaticon-earnings','flaticon-statistics-1','flaticon-globe-grid','flaticon-crown','flaticon-news','flaticon-commentary','flaticon-label','flaticon-market','flaticon-briefcase','flaticon-newspaper-1','flaticon-document','flaticon-shield','flaticon-diamond','flaticon-group','flaticon-folder','flaticon-usb','flaticon-agreement','flaticon-networking-1','flaticon-mouse','flaticon-analytics-1','flaticon-graphic-design','flaticon-linkedin','flaticon-mission','flaticon-trophy','flaticon-group-chat','flaticon-presentation-1','flaticon-strategy','flaticon-folder-1','flaticon-globe','flaticon-graph-1','flaticon-browser','flaticon-hierarchical-structure','flaticon-ladder','flaticon-location-pin','flaticon-social-media','flaticon-keyword','flaticon-product','flaticon-web-development','flaticon-purchase','flaticon-link-2','flaticon-dialogue','flaticon-justice','flaticon-justice-1','flaticon-business-and-finance','icon-006-data','icon-008-startup-1','icon-003-speech-bubble','icon-018-online','icon-013-trophy','icon-023-bullhorn','icon-034-goal','icon-025-tactics','icon-017-files-and-folders','icon-001-file','icon-026-analytics','icon-039-motivation','icon-036-binoculars','icon-007-social-media','icon-027-bar-chart','icon-005-analysis','icon-030-site','icon-029-keyword','icon-028-feature','icon-038-digital-marketing','icon-031-computer','icon-024-banner','icon-033-target-2','icon-019-target-1','icon-009-presentation','icon-035-trophy-1','icon-022-analysis-1','icon-037-smartphone','icon-015-target','icon-032-business','icon-004-flash-drive','icon-010-promotion','icon-014-research','icon-016-customer-review','icon-011-security','icon-020-laptop','icon-021-unlink'];
    // foreach ($icons as  $icon) {
    //     // echo $icon."<br>";
    //     Icon::insert([
    //         'icon'=> $icon,
    //         'created_at'=>Carbon::now(),
    //     ]);
    // }
      return bcrypt('WelkinMoon2002@@');
    }
}
