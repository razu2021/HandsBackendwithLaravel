<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// home model 
use App\Models\HomeBanner;
use App\Models\HomeEvent;
use App\Models\Whatewedo;
use App\Models\HomeCauses;
use App\Models\HomeProduct;
use App\Models\HomeAboutCauses;
use App\Models\HomeDonar;
use App\Models\Volunteer;
use App\Models\HomeTestimonial;
use App\Models\Portfolio;
use App\Models\OurPartner;
use App\Models\HomeNews;
// about model 
use App\Models\AboutBanner;
use App\Models\AboutAchivment;
use App\Models\AboutAboutUsOne;
use App\Models\AboutAboutUsTwo;
use App\Models\AboutOurMission;
use App\Models\AboutRecentEvent;
// whate we do
use App\Models\WeDoBanner;
use App\Models\WedoAchivment;
use App\Models\ServiceCatagoryOne;
use App\Models\ServiceCatagoryTwo;

// team
use App\Models\TeamBanner;
use App\Models\OurTeam;
use App\Models\CorporateOffice;
// volunteer 
use App\Models\VolunteerManagementTeam;
// causes  
use App\Models\CausesBanner;
// founder  
use App\Models\FounderBanner;
use App\Models\FoundedHistory;
// histroy   
use App\Models\HistoryBanner;
use App\Models\CompanyHistory;
// blog   
use App\Models\BlogBanner;
use App\Models\OurRecentBlog;
use App\Models\OurLatestBlog;
// event   
use App\Models\EventBanner;
use App\Models\AllEvent;
// Gallery   
use App\Models\GalleryBanner;
// volunteer    
use App\Models\VolunteerBanner;
use App\Models\VolunteerOurUnity;
use App\Models\OurTeamLeader;
use App\Models\OurHonesty;
use App\Models\OurFieldWorkerTeam;
use App\Models\WeHelpfull;
// contact 
use App\Models\BannerContact;
use App\Models\ContactDetails;








class WebSiteController extends Controller
{
    //INDEX PAGE 
    public function index(){
        $all=HomeBanner::where('ban_status',1)->orderBy('ban_id','ASC')->get();
        $HomeEvent=HomeEvent::where('status',1)->orderBy('HEvent_id','ASC')->limit('4')->get();
        $whatwedo=Whatewedo::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $whatwe=Whatewedo::where('status',1)->orderBy('HEvent_id','ASC')->limit('6')->get();
        $whatweimage=Whatewedo::where('HEvent_id',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $causeshead=HomeCauses::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $causes=HomeCauses::where('status',1)->orderBy('HEvent_id','ASC')->limit('4')->get();
        $homeproduct=HomeProduct::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $producthead=HomeProduct::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $productmore=HomeProduct::where('status',1)->orderBy('HEvent_id','ASC')->limit('5')->get();
        $aboutcauses=HomeAboutCauses::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $causesimages=HomeAboutCauses::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $Ourdonar=HomeDonar::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $ourvolunteer=Volunteer::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $hometesthead=HomeTestimonial::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $hometestdes=HomeTestimonial::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $portfolio=Portfolio::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $partner=OurPartner::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $homenews=HomeNews::where('status',1)->orderBy('HEvent_id','ASC')->get();

        return view('website.index',compact('all','HomeEvent','whatwedo','whatwe','whatweimage','causeshead','causes','homeproduct','producthead','productmore','aboutcauses','causesimages','Ourdonar','ourvolunteer',
    'hometesthead','hometestdes','portfolio','partner','homenews'));
    }

    //about PAGE 
    public function about(){
        $all=AboutBanner::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $aboutachiv=AboutAchivment::where('status',1)->orderBy('HEvent_id','ASC')->limit('4')->get();
        $abouthead=AboutAboutUsOne::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $abouttitle=AboutAboutUsOne::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $aboutussubtitle=AboutAboutUsOne::where('status',1)->orderBy('HEvent_id','ASC')->limit('3')->get();
        $aboutinfo=AboutAboutUsOne::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $whatwedo=Whatewedo::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $whatwe=Whatewedo::where('status',1)->orderBy('HEvent_id','ASC')->limit('6')->get();
        $whatweimage=Whatewedo::where('HEvent_id',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $abouthead2=AboutAboutUsTwo::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $abouttitle2=AboutAboutUsTwo::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $aboutussubtitle2=AboutAboutUsTwo::where('status',1)->orderBy('HEvent_id','ASC')->limit('3')->get();
        $aboutinfo2=AboutAboutUsTwo::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $aboutmissionh=AboutOurMission::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $aboutmissioninfo=AboutOurMission::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $aboutteam=OurTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('8')->get();
        $teamhead=OurTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $volunteer=VolunteerManagementTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('8')->get();
        $volunteerhead=VolunteerManagementTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $Revent=AboutRecentEvent::where('status',1)->orderBy('HEvent_id','ASC')->limit('6')->get();
        $Reventh=AboutRecentEvent::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $Reventall=AboutRecentEvent::where('status',1)->orderBy('HEvent_id','ASC')->limit('2')->get();
        $hometesthead=HomeTestimonial::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
        $hometestdes=HomeTestimonial::where('status',1)->orderBy('HEvent_id','ASC')->get();
        $partner=OurPartner::where('status',1)->orderBy('HEvent_id','ASC')->get();
        return view('website.pages.about',compact('all','aboutachiv','abouthead','abouttitle','aboutussubtitle','aboutinfo','whatwedo','whatwe','whatweimage','abouthead2',
         'abouttitle2','aboutussubtitle2','aboutinfo2','aboutmissionh','aboutmissioninfo','aboutteam','teamhead','volunteer','volunteerhead','Revent','Reventh','Reventall','partner','hometesthead','hometestdes'));
    }
// whate we do 
public function what_we_do(){
    $all=WeDoBanner::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $wedoachiv=WedoAchivment::where('status',1)->orderBy('HEvent_id','ASC')->limit('4')->get(); 
    $serviceonehead=ServiceCatagoryOne::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get(); 
    $serviceone=ServiceCatagoryOne::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $headoffice=CorporateOffice::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $serviceTwo=ServiceCatagoryTwo::where('status',1)->orderBy('HEvent_id','ASC')->get(); 



    return view('website.pages.whate_we_do',compact('all','wedoachiv','serviceonehead','serviceone','headoffice','serviceTwo'));
}

public function ourteam(){
    $all=TeamBanner::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $allteam=OurTeam::where('status',1)->orderBy('HEvent_id','ASC')->get();
    $teamhead=OurTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();

    return view('website.pages.team',compact('all','allteam','teamhead'));
}

public function causes(){
    $all=CausesBanner::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $causeshead=HomeCauses::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $causes=HomeCauses::where('status',1)->orderBy('HEvent_id','ASC')->limit('4')->get();

    return view('website.pages.causes',compact('all','causeshead','causes'));
}

public function founder(){
    $all=FounderBanner::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $founderabout=FoundedHistory::where('status',1)->orderBy('HEvent_id','ASC')->get(); 

    return view('website.pages.founder',compact('all','founderabout'));
}

public function history(){
    $all=HistoryBanner::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    $companyhistory=CompanyHistory::where('status',1)->orderBy('HEvent_id','ASC')->get(); 
    return view('website.pages.history',compact('all','companyhistory'));
}

public function blog(){
    $all=BlogBanner::where('status',1)->orderBy('HEvent_id','ASC')->get();
    $blogh=BlogBanner::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $Rblog=OurRecentBlog::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $Lblogh=OurLatestBlog::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $Lblog=OurLatestBlog::where('status',1)->orderBy('HEvent_id','ASC')->get();

    return view('website.pages.blog',compact('all','blogh','Rblog','Lblogh','Lblog'));
}

public function event(){
    $banh=EventBanner::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $banE=EventBanner::where('status',1)->orderBy('HEvent_id','ASC')->limit('2')->get();
    $banimg=EventBanner::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $allevent=AllEvent::where('status',1)->orderBy('HEvent_id','ASC')->get();


    return view('website.pages.event',compact('banh','banE','banimg','allevent'));
}


public function gallery(){
    $all=GalleryBanner::where('status',1)->orderBy('HEvent_id','ASC')->get();

    return view('website.pages.gallery',compact('all'));
}

public function volunteer(){
    $all=VolunteerBanner::where('status',1)->orderBy('HEvent_id','ASC')->get();
    $volunteer=VolunteerManagementTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('3')->get();
    $volunteerhead=VolunteerManagementTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $ourunity=VolunteerOurUnity::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $teamlh=OurTeamLeader::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $teamleader=OurTeamLeader::where('status',1)->orderBy('HEvent_id','ASC')->limit('3')->get();
    $ourhonesty=OurHonesty::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $fworkerh=OurFieldWorkerTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    $fworker=OurFieldWorkerTeam::where('status',1)->orderBy('HEvent_id','ASC')->limit('3')->get();
    $allvolunteer=OurFieldWorkerTeam::where('status',1)->orderBy('HEvent_id','ASC')->get();
    $helpfull=WeHelpfull::where('status',1)->orderBy('HEvent_id','ASC')->limit('1')->get();
    return view('website.pages.volunteer',compact('all','volunteer','volunteerhead','ourunity','teamlh','teamleader','ourhonesty','fworkerh','fworker','helpfull','allvolunteer'));
}


public function addvolunteer(){



    return view('website.pages.bcome_a_volunteer');
}
public function contact(){
    $all=BannerContact::where('status',1)->orderBy('HEvent_id','ASC')->get();
    $condetails=ContactDetails::where('status',1)->orderBy('HEvent_id','ASC')->get();

    return view('website.pages.contact',compact('all','condetails'));
}

public function where_we_work(){


    return view('website.pages.where_we_work');
}






}
