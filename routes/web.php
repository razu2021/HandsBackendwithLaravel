<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\BannerController;

//  admin controller 
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\website\join\JoinController;

// website controller Home page 
use App\Http\Controllers\website\WebSiteController;
// Home controller 
use App\Http\Controllers\website\home\HomeBannerController;
use App\Http\Controllers\website\home\HomeEventController;
use App\Http\Controllers\website\home\WhatwedoController;
use App\Http\Controllers\website\home\HomeCausesController;
use App\Http\Controllers\website\home\HomeProductController;
use App\Http\Controllers\website\home\HomeAboutCausesController;
use App\Http\Controllers\website\home\HomeValuableDonnerController;
use App\Http\Controllers\website\home\HomeTestimonialController;
use App\Http\Controllers\website\home\NewsController;
use App\Http\Controllers\website\home\VolunteerController;
use App\Http\Controllers\website\home\PortfolioController;
use App\Http\Controllers\website\home\OurPartnerController;
// about page controller start here 
use App\Http\Controllers\website\about\AboutBannerController;
use App\Http\Controllers\website\about\AboutAboutusController;
use App\Http\Controllers\website\about\AboutAchevmentController;
use App\Http\Controllers\website\about\AboutAboutusTwoController;
use App\Http\Controllers\website\about\AboutOurMissionController;
use App\Http\Controllers\website\about\AboutRecentEventController;
// founder &  CEO 
use App\Http\Controllers\website\founder\FounderBannerController;
use App\Http\Controllers\website\founder\FoundedHistoryController;
// company history controller 
use App\Http\Controllers\website\history\HistoryBannerController;
use App\Http\Controllers\website\history\CompanyHistroyController;
// Causes controller 
use App\Http\Controllers\website\causes\CausesBannerController;
// Event page controller link is here 
use App\Http\Controllers\website\event\EventBannerController;
use App\Http\Controllers\website\event\AllEventController;
// Blog  controller start here 
use App\Http\Controllers\website\blog\BlogBannerController;
use App\Http\Controllers\website\blog\OurRecentBlogController;
use App\Http\Controllers\website\blog\LatestBlogController;
// motivational content controller 
use App\Http\Controllers\website\motivational\MotivationalContentController;
// Gallry  controller start here  
use App\Http\Controllers\website\gallery\GalleryBannerController;
use App\Http\Controllers\website\gallery\AboutGalleryController;
use App\Http\Controllers\website\gallery\CorporateOfficeController;
use App\Http\Controllers\website\gallery\GalleryWhatwedoController;
use App\Http\Controllers\website\gallery\GalleryWhatididController;
use App\Http\Controllers\website\gallery\GalleryImageController;
// Volunter controller is start here 
use App\Http\Controllers\website\volunteer\VolunteerBannerController;
use App\Http\Controllers\website\volunteer\VolunteerOurUnityController;
use App\Http\Controllers\website\volunteer\OurHonestVolunteerController;
use App\Http\Controllers\website\volunteer\WeHelpfullController;
use App\Http\Controllers\website\volunteer\VolunteerManagementTeamController;
use App\Http\Controllers\website\volunteer\OurFeildWorkerController;
use App\Http\Controllers\website\volunteer\OurTeamLeaderController;
//bcome 
use App\Http\Controllers\website\bcomev\BecomeVolunteerNewController;
use App\Http\Controllers\website\bcomev\BcomeVolunteerBannerController;
// Team banner  controller start here -----
use App\Http\Controllers\website\team\TeamBannerController;
use App\Http\Controllers\website\team\OurTeamController;
// what we do   controller start here -----
use App\Http\Controllers\website\wedo\WEDoBannerController;
use App\Http\Controllers\website\wedo\WedoAchivmentController;
use App\Http\Controllers\website\wedo\ServiceCatagoryOneController;
use App\Http\Controllers\website\wedo\ServiceCatagoryTwoController;
// where we work controller 
use App\Http\Controllers\website\wherewework\WhereWeworkController;
use App\Http\Controllers\website\wherewework\UsersContactMassageController;
// contact controller 
use App\Http\Controllers\website\contact\ContactMassagesController;
use App\Http\Controllers\website\contact\ContactBannerController;
use App\Http\Controllers\website\contact\ContactDetailsController;
//manage controller 
use App\Http\Controllers\website\manage\SocialController;
use App\Http\Controllers\website\manage\TeamSocialController;
use App\Http\Controllers\website\manage\FooterController;
use App\Http\Controllers\website\manage\HeaderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// =================      website  Controller deafult route start here  =======================
Route::get('/', [WebSiteController::class, 'index']);
Route::get('/about', [WebSiteController::class, 'about']);
Route::get('/whate/we/do', [WebSiteController::class, 'what_we_do']);
Route::get('/whate_we_work', [WebSiteController::class, 'where_we_work']);
Route::get('/ourTeam', [WebSiteController::class, 'ourteam']);
Route::get('/ourallcauses', [WebSiteController::class, 'causes']);
Route::get('/OurFounder', [WebSiteController::class, 'founder']);
Route::get('/Company_history', [WebSiteController::class, 'history']);
Route::get('/blog', [WebSiteController::class, 'blog']);
Route::get('/our_all_events', [WebSiteController::class, 'event']);
Route::get('/our_all_gallery', [WebSiteController::class, 'gallery']);
Route::get('/about_our_volunteeer', [WebSiteController::class, 'volunteer']);
Route::get('/Become_a_volunteer_new', [WebSiteController::class, 'addvolunteer']);
Route::get('/Contact_us', [WebSiteController::class, 'contact']);




// =================      admin   Controller deafult route start here  =======================

Route::get('admin', [AdminController::class, 'index']);



Route::get('dashboard/banner', [BannerController::class, 'index']);
Route::get('dashboard/banner/add', [BannerController::class, 'add']);
Route::get('dashboard/banner/edit/{slug}', [BannerController::class, 'edit']);
Route::get('dashboard/banner/view/{slug}', [BannerController::class, 'view']);
Route::post('dashboard/banner/submit', [BannerController::class, 'insert']);
Route::post('dashboard/banner/update', [BannerController::class, 'update']);
Route::get('dashboard/banner/softdelete/{id}', [BannerController::class, 'softdelete']);
Route::get('dashboard/banner/restore/{id}', [BannerController::class, 'restore']);
Route::get('dashboard/banner/delete/{id}', [BannerController::class, 'delete']);
Route::get('dashboard/banner/recycle', [BannerController::class, 'recycle']);



// ================== WEB SITE  BACKEND ROUTE      home banner controller deafult route start here =====================
Route::get('dashboard/website/home/banner', [HomeBannerController::class, 'index']);
Route::get('dashboard/website/home/banner/add', [HomeBannerController::class, 'add']);
Route::get('dashboard/website/home/banner/edit/{slug}', [HomeBannerController::class, 'edit']);
Route::get('dashboard/website/home/banner/view/{slug}', [HomeBannerController::class, 'view']);
Route::post('dashboard/website/home/banner/submit', [HomeBannerController::class, 'insert']);
Route::post('dashboard/website/home/banner/update', [HomeBannerController::class, 'update']);
Route::get('dashboard/website/home/banner/softdelete/{id}', [HomeBannerController::class, 'softdelete']);
Route::get('dashboard/website/home/banner/restore/{id}', [HomeBannerController::class, 'restore']);
Route::get('dashboard/website/home/banner/delete/{id}', [HomeBannerController::class, 'delete']);
Route::get('dashboard/website/home/banner/recycle', [HomeBannerController::class, 'recycle']);

// ==================     home Event  controller deafult route start here =====================
Route::get('dashboard/website/home/Event', [HomeEventController::class, 'index']);
Route::get('dashboard/website/home/Event/add', [HomeEventController::class, 'add']);
Route::get('dashboard/website/home/Event/edit/{slug}', [HomeEventController::class, 'edit']);
Route::get('dashboard/website/home/Event/view/{slug}', [HomeEventController::class, 'view']);
Route::post('dashboard/website/home/Event/submit', [HomeEventController::class, 'insert']);
Route::post('dashboard/website/home/Event/update', [HomeEventController::class, 'update']);
Route::get('dashboard/website/home/Event/softdelete/{id}', [HomeEventController::class, 'softdelete']);
Route::get('dashboard/website/home/Event/restore/{id}', [HomeEventController::class, 'restore']);
Route::get('dashboard/website/home/Event/delete/{id}', [HomeEventController::class, 'delete']);
Route::get('dashboard/website/home/Event/recycle', [HomeEventController::class, 'recycle']);

// ==================     home  whate we do   controller deafult route start here =====================
Route::get('dashboard/website/home/Whatewedo', [WhatwedoController::class, 'index']);
Route::get('dashboard/website/home/Whatewedo/add', [WhatwedoController::class, 'add']);
Route::get('dashboard/website/home/Whatewedo/edit/{slug}', [WhatwedoController::class, 'edit']);
Route::get('dashboard/website/home/Whatewedo/view/{slug}', [WhatwedoController::class, 'view']);
Route::post('dashboard/website/home/Whatewedo/submit', [WhatwedoController::class, 'insert']);
Route::post('dashboard/website/home/Whatewedo/update', [WhatwedoController::class, 'update']);
Route::get('dashboard/website/home/Whatewedo/softdelete/{id}', [WhatwedoController::class, 'softdelete']);
Route::get('dashboard/website/home/Whatewedo/restore/{id}', [WhatwedoController::class, 'restore']);
Route::get('dashboard/website/home/Whatewedo/delete/{id}', [WhatwedoController::class, 'delete']);
Route::get('dashboard/website/home/Whatewedo/recycle', [WhatwedoController::class, 'recycle']);

// ==================     home  whate we do   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeCauses', [HomeCausesController::class, 'index']);
Route::get('dashboard/website/home/HomeCauses/add', [HomeCausesController::class, 'add']);
Route::get('dashboard/website/home/HomeCauses/edit/{slug}', [HomeCausesController::class, 'edit']);
Route::get('dashboard/website/home/HomeCauses/view/{slug}', [HomeCausesController::class, 'view']);
Route::post('dashboard/website/home/HomeCauses/submit', [HomeCausesController::class, 'insert']);
Route::post('dashboard/website/home/HomeCauses/update', [HomeCausesController::class, 'update']);
Route::get('dashboard/website/home/HomeCauses/softdelete/{id}', [HomeCausesController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeCauses/restore/{id}', [HomeCausesController::class, 'restore']);
Route::get('dashboard/website/home/HomeCauses/delete/{id}', [HomeCausesController::class, 'delete']);
Route::get('dashboard/website/home/HomeCauses/recycle', [HomeCausesController::class, 'recycle']);

// ==================     home  product   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeProduct', [HomeProductController::class, 'index']);
Route::get('dashboard/website/home/HomeProduct/add', [HomeProductController::class, 'add']);
Route::get('dashboard/website/home/HomeProduct/edit/{slug}', [HomeProductController::class, 'edit']);
Route::get('dashboard/website/home/HomeProduct/view/{slug}', [HomeProductController::class, 'view']);
Route::post('dashboard/website/home/HomeProduct/submit', [HomeProductController::class, 'insert']);
Route::post('dashboard/website/home/HomeProduct/update', [HomeProductController::class, 'update']);
Route::get('dashboard/website/home/HomeProduct/softdelete/{id}', [HomeProductController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeProduct/restore/{id}', [HomeProductController::class, 'restore']);
Route::get('dashboard/website/home/HomeProduct/delete/{id}', [HomeProductController::class, 'delete']);
Route::get('dashboard/website/home/HomeProduct/recycle', [HomeProductController::class, 'recycle']);

// ==================     home  product   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeAboutCauses', [HomeAboutCausesController::class, 'index']);
Route::get('dashboard/website/home/HomeAboutCauses/add', [HomeAboutCausesController::class, 'add']);
Route::get('dashboard/website/home/HomeAboutCauses/edit/{slug}', [HomeAboutCausesController::class, 'edit']);
Route::get('dashboard/website/home/HomeAboutCauses/view/{slug}', [HomeAboutCausesController::class, 'view']);
Route::post('dashboard/website/home/HomeAboutCauses/submit', [HomeAboutCausesController::class, 'insert']);
Route::post('dashboard/website/home/HomeAboutCauses/update', [HomeAboutCausesController::class, 'update']);
Route::get('dashboard/website/home/HomeAboutCauses/softdelete/{id}', [HomeAboutCausesController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeAboutCauses/restore/{id}', [HomeAboutCausesController::class, 'restore']);
Route::get('dashboard/website/home/HomeAboutCauses/delete/{id}', [HomeAboutCausesController::class, 'delete']);
Route::get('dashboard/website/home/HomeAboutCauses/recycle', [HomeAboutCausesController::class, 'recycle']);

// ==================     home  product   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeDonar', [HomeValuableDonnerController::class, 'index']);
Route::get('dashboard/website/home/HomeDonar/add', [HomeValuableDonnerController::class, 'add']);
Route::get('dashboard/website/home/HomeDonar/edit/{slug}', [HomeValuableDonnerController::class, 'edit']);
Route::get('dashboard/website/home/HomeDonar/view/{slug}', [HomeValuableDonnerController::class, 'view']);
Route::post('dashboard/website/home/HomeDonar/submit', [HomeValuableDonnerController::class, 'insert']);
Route::post('dashboard/website/home/HomeDonar/update', [HomeValuableDonnerController::class, 'update']);
Route::get('dashboard/website/home/HomeDonar/softdelete/{id}', [HomeValuableDonnerController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeDonar/restore/{id}', [HomeValuableDonnerController::class, 'restore']);
Route::get('dashboard/website/home/HomeDonar/delete/{id}', [HomeValuableDonnerController::class, 'delete']);
Route::get('dashboard/website/home/HomeDonar/recycle', [HomeValuableDonnerController::class, 'recycle']);

// ==================     home  product   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeTestimonial', [HomeTestimonialController::class, 'index']);
Route::get('dashboard/website/home/HomeTestimonial/add', [HomeTestimonialController::class, 'add']);
Route::get('dashboard/website/home/HomeTestimonial/edit/{slug}', [HomeTestimonialController::class, 'edit']);
Route::get('dashboard/website/home/HomeTestimonial/view/{slug}', [HomeTestimonialController::class, 'view']);
Route::post('dashboard/website/home/HomeTestimonial/submit', [HomeTestimonialController::class, 'insert']);
Route::post('dashboard/website/home/HomeTestimonial/update', [HomeTestimonialController::class, 'update']);
Route::get('dashboard/website/home/HomeTestimonial/softdelete/{id}', [HomeTestimonialController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeTestimonial/restore/{id}', [HomeTestimonialController::class, 'restore']);
Route::get('dashboard/website/home/HomeTestimonial/delete/{id}', [HomeTestimonialController::class, 'delete']);
Route::get('dashboard/website/home/HomeTestimonial/recycle', [HomeTestimonialController::class, 'recycle']);

// ==================     home  product   controller deafult route start here =====================
Route::get('dashboard/website/home/HomeNews', [NewsController::class, 'index']);
Route::get('dashboard/website/home/HomeNews/add', [NewsController::class, 'add']);
Route::get('dashboard/website/home/HomeNews/edit/{slug}', [NewsController::class, 'edit']);
Route::get('dashboard/website/home/HomeNews/view/{slug}', [NewsController::class, 'view']);
Route::post('dashboard/website/home/HomeNews/submit', [NewsController::class, 'insert']);
Route::post('dashboard/website/home/HomeNews/update', [NewsController::class, 'update']);
Route::get('dashboard/website/home/HomeNews/softdelete/{id}', [NewsController::class, 'softdelete']);
Route::get('dashboard/website/home/HomeNews/restore/{id}', [NewsController::class, 'restore']);
Route::get('dashboard/website/home/HomeNews/delete/{id}', [NewsController::class, 'delete']);
Route::get('dashboard/website/home/HomeNews/recycle', [NewsController::class, 'recycle']);

// ==================     home  Volunter   controller deafult route start here =====================
Route::get('dashboard/website/home/Volunteer', [VolunteerController::class, 'index']);
Route::get('dashboard/website/home/Volunteer/add', [VolunteerController::class, 'add']);
Route::get('dashboard/website/home/Volunteer/edit/{slug}', [VolunteerController::class, 'edit']);
Route::get('dashboard/website/home/Volunteer/view/{slug}', [VolunteerController::class, 'view']);
Route::post('dashboard/website/home/Volunteer/submit', [VolunteerController::class, 'insert']);
Route::post('dashboard/website/home/Volunteer/update', [VolunteerController::class, 'update']);
Route::get('dashboard/website/home/Volunteer/softdelete/{id}', [VolunteerController::class, 'softdelete']);
Route::get('dashboard/website/home/Volunteer/restore/{id}', [VolunteerController::class, 'restore']);
Route::get('dashboard/website/home/Volunteer/delete/{id}', [VolunteerController::class, 'delete']);
Route::get('dashboard/website/home/Volunteer/recycle', [VolunteerController::class, 'recycle']);

// ==================     home  Portfolio controller deafult route start here =====================
Route::get('dashboard/website/home/Portfolio', [PortfolioController::class, 'index']);
Route::get('dashboard/website/home/Portfolio/add', [PortfolioController::class, 'add']);
Route::get('dashboard/website/home/Portfolio/edit/{slug}', [PortfolioController::class, 'edit']);
Route::get('dashboard/website/home/Portfolio/view/{slug}', [PortfolioController::class, 'view']);
Route::post('dashboard/website/home/Portfolio/submit', [PortfolioController::class, 'insert']);
Route::post('dashboard/website/home/Portfolio/update', [PortfolioController::class, 'update']);
Route::get('dashboard/website/home/Portfolio/softdelete/{id}', [PortfolioController::class, 'softdelete']);
Route::get('dashboard/website/home/Portfolio/restore/{id}', [PortfolioController::class, 'restore']);
Route::get('dashboard/website/home/Portfolio/delete/{id}', [PortfolioController::class, 'delete']);
Route::get('dashboard/website/home/Portfolio/recycle', [PortfolioController::class, 'recycle']);

// ==================     home  OurPartner controller deafult route start here =====================
Route::get('dashboard/website/home/OurPartner', [OurPartnerController::class, 'index']);
Route::get('dashboard/website/home/OurPartner/add', [OurPartnerController::class, 'add']);
Route::get('dashboard/website/home/OurPartner/edit/{slug}', [OurPartnerController::class, 'edit']);
Route::get('dashboard/website/home/OurPartner/view/{slug}', [OurPartnerController::class, 'view']);
Route::post('dashboard/website/home/OurPartner/submit', [OurPartnerController::class, 'insert']);
Route::post('dashboard/website/home/OurPartner/update', [OurPartnerController::class, 'update']);
Route::get('dashboard/website/home/OurPartner/softdelete/{id}', [OurPartnerController::class, 'softdelete']);
Route::get('dashboard/website/home/OurPartner/restore/{id}', [OurPartnerController::class, 'restore']);
Route::get('dashboard/website/home/OurPartner/delete/{id}', [OurPartnerController::class, 'delete']);
Route::get('dashboard/website/home/OurPartner/recycle', [OurPartnerController::class, 'recycle']);


//=============================================================      ****************               ========= about page controller route is start here     **********  =========
// ==================     About banner controller deafult route start here =====================
Route::get('dashboard/website/about/AboutBanner', [AboutBannerController::class, 'index']);
Route::get('dashboard/website/about/AboutBanner/add', [AboutBannerController::class, 'add']);
Route::get('dashboard/website/about/AboutBanner/edit/{slug}', [AboutBannerController::class, 'edit']);
Route::get('dashboard/website/about/AboutBanner/view/{slug}', [AboutBannerController::class, 'view']);
Route::post('dashboard/website/about/AboutBanner/submit', [AboutBannerController::class, 'insert']);
Route::post('dashboard/website/about/AboutBanner/update', [AboutBannerController::class, 'update']);
Route::get('dashboard/website/about/AboutBanner/softdelete/{id}', [AboutBannerController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutBanner/restore/{id}', [AboutBannerController::class, 'restore']);
Route::get('dashboard/website/about/AboutBanner/delete/{id}', [AboutBannerController::class, 'delete']);
Route::get('dashboard/website/about/AboutBanner/recycle', [AboutBannerController::class, 'recycle']);
// ================== About Achivment controller deafult route start here =====================
Route::get('dashboard/website/about/AboutAchivment', [AboutAchevmentController::class, 'index']);
Route::get('dashboard/website/about/AboutAchivment/add', [AboutAchevmentController::class, 'add']);
Route::get('dashboard/website/about/AboutAchivment/edit/{slug}', [AboutAchevmentController::class, 'edit']);
Route::get('dashboard/website/about/AboutAchivment/view/{slug}', [AboutAchevmentController::class, 'view']);
Route::post('dashboard/website/about/AboutAchivment/submit', [AboutAchevmentController::class, 'insert']);
Route::post('dashboard/website/about/AboutAchivment/update', [AboutAchevmentController::class, 'update']);
Route::get('dashboard/website/about/AboutAchivment/softdelete/{id}', [AboutAchevmentController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutAchivment/restore/{id}', [AboutAchevmentController::class, 'restore']);
Route::get('dashboard/website/about/AboutAchivment/delete/{id}', [AboutAchevmentController::class, 'delete']);
Route::get('dashboard/website/about/AboutAchivment/recycle', [AboutAchevmentController::class, 'recycle']);

// ==================     about about us controller deafult route start here =====================
Route::get('dashboard/website/about/AboutAboutUsOne', [AboutAboutusController::class, 'index']);
Route::get('dashboard/website/about/AboutAboutUsOne/add', [AboutAboutusController::class, 'add']);
Route::get('dashboard/website/about/AboutAboutUsOne/edit/{slug}', [AboutAboutusController::class, 'edit']);
Route::get('dashboard/website/about/AboutAboutUsOne/view/{slug}', [AboutAboutusController::class, 'view']);
Route::post('dashboard/website/about/AboutAboutUsOne/submit', [AboutAboutusController::class, 'insert']);
Route::post('dashboard/website/about/AboutAboutUsOne/update', [AboutAboutusController::class, 'update']);
Route::get('dashboard/website/about/AboutAboutUsOne/softdelete/{id}', [AboutAboutusController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutAboutUsOne/restore/{id}', [AboutAboutusController::class, 'restore']);
Route::get('dashboard/website/about/AboutAboutUsOne/delete/{id}', [AboutAboutusController::class, 'delete']);
Route::get('dashboard/website/about/AboutAboutUsOne/recycle', [AboutAboutusController::class, 'recycle']);

// ==================     about about us controller deafult route start here =====================
Route::get('dashboard/website/about/AboutAboutusTwo', [AboutAboutusTwoController::class, 'index']);
Route::get('dashboard/website/about/AboutAboutusTwo/add', [AboutAboutusTwoController::class, 'add']);
Route::get('dashboard/website/about/AboutAboutusTwo/edit/{slug}', [AboutAboutusTwoController::class, 'edit']);
Route::get('dashboard/website/about/AboutAboutusTwo/view/{slug}', [AboutAboutusTwoController::class, 'view']);
Route::post('dashboard/website/about/AboutAboutusTwo/submit', [AboutAboutusTwoController::class, 'insert']);
Route::post('dashboard/website/about/AboutAboutusTwo/update', [AboutAboutusTwoController::class, 'update']);
Route::get('dashboard/website/about/AboutAboutusTwo/softdelete/{id}', [AboutAboutusTwoController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutAboutusTwo/restore/{id}', [AboutAboutusTwoController::class, 'restore']);
Route::get('dashboard/website/about/AboutAboutusTwo/delete/{id}', [AboutAboutusTwoController::class, 'delete']);
Route::get('dashboard/website/about/AboutAboutusTwo/recycle', [AboutAboutusTwoController::class, 'recycle']);

// ==================     about about us controller deafult route start here =====================
Route::get('dashboard/website/about/AboutOurMission', [AboutOurMissionController::class, 'index']);
Route::get('dashboard/website/about/AboutOurMission/add', [AboutOurMissionController::class, 'add']);
Route::get('dashboard/website/about/AboutOurMission/edit/{slug}', [AboutOurMissionController::class, 'edit']);
Route::get('dashboard/website/about/AboutOurMission/view/{slug}', [AboutOurMissionController::class, 'view']);
Route::post('dashboard/website/about/AboutOurMission/submit', [AboutOurMissionController::class, 'insert']);
Route::post('dashboard/website/about/AboutOurMission/update', [AboutOurMissionController::class, 'update']);
Route::get('dashboard/website/about/AboutOurMission/softdelete/{id}', [AboutOurMissionController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutOurMission/restore/{id}', [AboutOurMissionController::class, 'restore']);
Route::get('dashboard/website/about/AboutOurMission/delete/{id}', [AboutOurMissionController::class, 'delete']);
Route::get('dashboard/website/about/AboutOurMission/recycle', [AboutOurMissionController::class, 'recycle']);
// ==================     about about us controller deafult route start here =====================
Route::get('dashboard/website/about/AboutRecentEvent', [AboutRecentEventController::class, 'index']);
Route::get('dashboard/website/about/AboutRecentEvent/add', [AboutRecentEventController::class, 'add']);
Route::get('dashboard/website/about/AboutRecentEvent/edit/{slug}', [AboutRecentEventController::class, 'edit']);
Route::get('dashboard/website/about/AboutRecentEvent/view/{slug}', [AboutRecentEventController::class, 'view']);
Route::post('dashboard/website/about/AboutRecentEvent/submit', [AboutRecentEventController::class, 'insert']);
Route::post('dashboard/website/about/AboutRecentEvent/update', [AboutRecentEventController::class, 'update']);
Route::get('dashboard/website/about/AboutRecentEvent/softdelete/{id}', [AboutRecentEventController::class, 'softdelete']);
Route::get('dashboard/website/about/AboutRecentEvent/restore/{id}', [AboutRecentEventController::class, 'restore']);
Route::get('dashboard/website/about/AboutRecentEvent/delete/{id}', [AboutRecentEventController::class, 'delete']);
Route::get('dashboard/website/about/AboutRecentEvent/recycle', [AboutRecentEventController::class, 'recycle']);
// ==================     company founded banner controller deafult route start here                                FOUNDER BANNER  ===================== 
Route::get('dashboard/website/founder/FounderBanner', [FounderBannerController::class, 'index']);
Route::get('dashboard/website/founder/FounderBanner/add', [FounderBannerController::class, 'add']);
Route::get('dashboard/website/founder/FounderBanner/edit/{slug}', [FounderBannerController::class, 'edit']);
Route::get('dashboard/website/founder/FounderBanner/view/{slug}', [FounderBannerController::class, 'view']);
Route::post('dashboard/website/founder/FounderBanner/submit', [FounderBannerController::class, 'insert']);
Route::post('dashboard/website/founder/FounderBanner/update', [FounderBannerController::class, 'update']);
Route::get('dashboard/website/founder/FounderBanner/softdelete/{id}', [FounderBannerController::class, 'softdelete']);
Route::get('dashboard/website/founder/FounderBanner/restore/{id}', [FounderBannerController::class, 'restore']);
Route::get('dashboard/website/founder/FounderBanner/delete/{id}', [FounderBannerController::class, 'delete']);
Route::get('dashboard/website/founder/FounderBanner/recycle', [FounderBannerController::class, 'recycle']);
// ==================     founded histroy  us controller deafult route start here  ===================== 
Route::get('dashboard/website/founder/FoundedHistory', [FoundedHistoryController::class, 'index']);
Route::get('dashboard/website/founder/FoundedHistory/add', [FoundedHistoryController::class, 'add']);
Route::get('dashboard/website/founder/FoundedHistory/edit/{slug}', [FoundedHistoryController::class, 'edit']);
Route::get('dashboard/website/founder/FoundedHistory/view/{slug}', [FoundedHistoryController::class, 'view']);
Route::post('dashboard/website/founder/FoundedHistory/submit', [FoundedHistoryController::class, 'insert']);
Route::post('dashboard/website/founder/FoundedHistory/update', [FoundedHistoryController::class, 'update']);
Route::get('dashboard/website/founder/FoundedHistory/softdelete/{id}', [FoundedHistoryController::class, 'softdelete']);
Route::get('dashboard/website/founder/FoundedHistory/restore/{id}', [FoundedHistoryController::class, 'restore']);
Route::get('dashboard/website/founder/FoundedHistory/delete/{id}', [FoundedHistoryController::class, 'delete']);
Route::get('dashboard/website/founder/FoundedHistory/recycle', [FoundedHistoryController::class, 'recycle']);
// ==================     founded histroy  us controller deafult route start here                                       History Controller     ===================== 
Route::get('dashboard/website/history/HistoryBanner', [HistoryBannerController::class, 'index']);
Route::get('dashboard/website/history/HistoryBanner/add', [HistoryBannerController::class, 'add']);
Route::get('dashboard/website/history/HistoryBanner/edit/{slug}', [HistoryBannerController::class, 'edit']);
Route::get('dashboard/website/history/HistoryBanner/view/{slug}', [HistoryBannerController::class, 'view']);
Route::post('dashboard/website/history/HistoryBanner/submit', [HistoryBannerController::class, 'insert']);
Route::post('dashboard/website/history/HistoryBanner/update', [HistoryBannerController::class, 'update']);
Route::get('dashboard/website/history/HistoryBanner/softdelete/{id}', [HistoryBannerController::class, 'softdelete']);
Route::get('dashboard/website/history/HistoryBanner/restore/{id}', [HistoryBannerController::class, 'restore']);
Route::get('dashboard/website/history/HistoryBanner/delete/{id}', [HistoryBannerController::class, 'delete']);
Route::get('dashboard/website/history/HistoryBanner/recycle', [HistoryBannerController::class, 'recycle']);
// ==================     founded histroy  us controller deafult route start here ===================== 
Route::get('dashboard/website/history/CompanyHistory', [CompanyHistroyController::class, 'index']);
Route::get('dashboard/website/history/CompanyHistory/add', [CompanyHistroyController::class, 'add']);
Route::get('dashboard/website/history/CompanyHistory/edit/{slug}', [CompanyHistroyController::class, 'edit']);
Route::get('dashboard/website/history/CompanyHistory/view/{slug}', [CompanyHistroyController::class, 'view']);
Route::post('dashboard/website/history/CompanyHistory/submit', [CompanyHistroyController::class, 'insert']);
Route::post('dashboard/website/history/CompanyHistory/update', [CompanyHistroyController::class, 'update']);
Route::get('dashboard/website/history/CompanyHistory/softdelete/{id}', [CompanyHistroyController::class, 'softdelete']);
Route::get('dashboard/website/history/CompanyHistory/restore/{id}', [CompanyHistroyController::class, 'restore']);
Route::get('dashboard/website/history/CompanyHistory/delete/{id}', [CompanyHistroyController::class, 'delete']);
Route::get('dashboard/website/history/CompanyHistory/recycle', [CompanyHistroyController::class, 'recycle']);
// ==================     founded histroy  us controller deafult route start here                                       Causes Controller routre is here      ===================== 
Route::get('dashboard/website/causes/CausesBanner', [CausesBannerController::class, 'index']);
Route::get('dashboard/website/causes/CausesBanner/add', [CausesBannerController::class, 'add']);
Route::get('dashboard/website/causes/CausesBanner/edit/{slug}', [CausesBannerController::class, 'edit']);
Route::get('dashboard/website/causes/CausesBanner/view/{slug}', [CausesBannerController::class, 'view']);
Route::post('dashboard/website/causes/CausesBanner/submit', [CausesBannerController::class, 'insert']);
Route::post('dashboard/website/causes/CausesBanner/update', [CausesBannerController::class, 'update']);
Route::get('dashboard/website/causes/CausesBanner/softdelete/{id}', [CausesBannerController::class, 'softdelete']);
Route::get('dashboard/website/causes/CausesBanner/restore/{id}', [CausesBannerController::class, 'restore']);
Route::get('dashboard/website/causes/CausesBanner/delete/{id}', [CausesBannerController::class, 'delete']);
Route::get('dashboard/website/causes/CausesBanner/recycle', [CausesBannerController::class, 'recycle']);
// ==================  Event banner controller deafult route start here     Event Controller routre is here      ===================== 
Route::get('dashboard/website/event/EventBanner', [EventBannerController::class, 'index']);
Route::get('dashboard/website/event/EventBanner/add', [EventBannerController::class, 'add']);
Route::get('dashboard/website/event/EventBanner/edit/{slug}', [EventBannerController::class, 'edit']);
Route::get('dashboard/website/event/EventBanner/view/{slug}', [EventBannerController::class, 'view']);
Route::post('dashboard/website/event/EventBanner/submit', [EventBannerController::class, 'insert']);
Route::post('dashboard/website/event/EventBanner/update', [EventBannerController::class, 'update']);
Route::get('dashboard/website/event/EventBanner/softdelete/{id}', [EventBannerController::class, 'softdelete']);
Route::get('dashboard/website/event/EventBanner/restore/{id}', [EventBannerController::class, 'restore']);
Route::get('dashboard/website/event/EventBanner/delete/{id}', [EventBannerController::class, 'delete']);
Route::get('dashboard/website/event/EventBanner/recycle', [EventBannerController::class, 'recycle']);
// all event route is start here 
Route::get('dashboard/website/event/AllEvent', [AllEventController::class, 'index']);
Route::get('dashboard/website/event/AllEvent/add', [AllEventController::class, 'add']);
Route::get('dashboard/website/event/AllEvent/edit/{slug}', [AllEventController::class, 'edit']);
Route::get('dashboard/website/event/AllEvent/view/{slug}', [AllEventController::class, 'view']);
Route::post('dashboard/website/event/AllEvent/submit', [AllEventController::class, 'insert']);
Route::post('dashboard/website/event/AllEvent/update', [AllEventController::class, 'update']);
Route::get('dashboard/website/event/AllEvent/softdelete/{id}', [AllEventController::class, 'softdelete']);
Route::get('dashboard/website/event/AllEvent/restore/{id}', [AllEventController::class, 'restore']);
Route::get('dashboard/website/event/AllEvent/delete/{id}', [AllEventController::class, 'delete']);
Route::get('dashboard/website/event/AllEvent/recycle', [AllEventController::class, 'recycle']);
// blog banner  route is star here 
Route::get('dashboard/website/blog/BlogBanner', [BlogBannerController::class, 'index']);
Route::get('dashboard/website/blog/BlogBanner/add', [BlogBannerController::class, 'add']);
Route::get('dashboard/website/blog/BlogBanner/edit/{slug}', [BlogBannerController::class, 'edit']);
Route::get('dashboard/website/blog/BlogBanner/view/{slug}', [BlogBannerController::class, 'view']);
Route::post('dashboard/website/blog/BlogBanner/submit', [BlogBannerController::class, 'insert']);
Route::post('dashboard/website/blog/BlogBanner/update', [BlogBannerController::class, 'update']);
Route::get('dashboard/website/blog/BlogBanner/softdelete/{id}', [BlogBannerController::class, 'softdelete']);
Route::get('dashboard/website/blog/BlogBanner/restore/{id}', [BlogBannerController::class, 'restore']);
Route::get('dashboard/website/blog/BlogBanner/delete/{id}', [BlogBannerController::class, 'delete']);
Route::get('dashboard/website/blog/BlogBanner/recycle', [BlogBannerController::class, 'recycle']);
// blog banner  route is star here 
Route::get('dashboard/website/blog/OurRecentBlog', [OurRecentBlogController::class, 'index']);
Route::get('dashboard/website/blog/OurRecentBlog/add', [OurRecentBlogController::class, 'add']);
Route::get('dashboard/website/blog/OurRecentBlog/edit/{slug}', [OurRecentBlogController::class, 'edit']);
Route::get('dashboard/website/blog/OurRecentBlog/view/{slug}', [OurRecentBlogController::class, 'view']);
Route::post('dashboard/website/blog/OurRecentBlog/submit', [OurRecentBlogController::class, 'insert']);
Route::post('dashboard/website/blog/OurRecentBlog/update', [OurRecentBlogController::class, 'update']);
Route::get('dashboard/website/blog/OurRecentBlog/softdelete/{id}', [OurRecentBlogController::class, 'softdelete']);
Route::get('dashboard/website/blog/OurRecentBlog/restore/{id}', [OurRecentBlogController::class, 'restore']);
Route::get('dashboard/website/blog/OurRecentBlog/delete/{id}', [OurRecentBlogController::class, 'delete']);
Route::get('dashboard/website/blog/OurRecentBlog/recycle', [OurRecentBlogController::class, 'recycle']);
// Latest  blog   route is star here 
Route::get('dashboard/website/blog/OurLatestBlog', [LatestBlogController::class, 'index']);
Route::get('dashboard/website/blog/OurLatestBlog/add', [LatestBlogController::class, 'add']);
Route::get('dashboard/website/blog/OurLatestBlog/edit/{slug}', [LatestBlogController::class, 'edit']);
Route::get('dashboard/website/blog/OurLatestBlog/view/{slug}', [LatestBlogController::class, 'view']);
Route::post('dashboard/website/blog/OurLatestBlog/submit', [LatestBlogController::class, 'insert']);
Route::post('dashboard/website/blog/OurLatestBlog/update', [LatestBlogController::class, 'update']);
Route::get('dashboard/website/blog/OurLatestBlog/softdelete/{id}', [LatestBlogController::class, 'softdelete']);
Route::get('dashboard/website/blog/OurLatestBlog/restore/{id}', [LatestBlogController::class, 'restore']);
Route::get('dashboard/website/blog/OurLatestBlog/delete/{id}', [LatestBlogController::class, 'delete']);
Route::get('dashboard/website/blog/OurLatestBlog/recycle', [LatestBlogController::class, 'recycle']);
// Motivational  content    route is star here 
Route::get('dashboard/website/motivational/MotivationalContent', [MotivationalContentController::class, 'index']);
Route::get('dashboard/website/motivational/MotivationalContent/add', [MotivationalContentController::class, 'add']);
Route::get('dashboard/website/motivational/MotivationalContent/edit/{slug}', [MotivationalContentController::class, 'edit']);
Route::get('dashboard/website/motivational/MotivationalContent/view/{slug}', [MotivationalContentController::class, 'view']);
Route::post('dashboard/website/motivational/MotivationalContent/submit', [MotivationalContentController::class, 'insert']);
Route::post('dashboard/website/motivational/MotivationalContent/update', [MotivationalContentController::class, 'update']);
Route::get('dashboard/website/motivational/MotivationalContent/softdelete/{id}', [MotivationalContentController::class, 'softdelete']);
Route::get('dashboard/website/motivational/MotivationalContent/restore/{id}', [MotivationalContentController::class, 'restore']);
Route::get('dashboard/website/motivational/MotivationalContent/delete/{id}', [MotivationalContentController::class, 'delete']);
Route::get('dashboard/website/motivational/MotivationalContent/recycle', [MotivationalContentController::class, 'recycle']);
// Motivational  content    route is star here =============================================================================  Gallery controller route is here 
Route::get('dashboard/website/gallery/GalleryBanner', [GalleryBannerController::class, 'index']);
Route::get('dashboard/website/gallery/GalleryBanner/add', [GalleryBannerController::class, 'add']);
Route::get('dashboard/website/gallery/GalleryBanner/edit/{slug}', [GalleryBannerController::class, 'edit']);
Route::get('dashboard/website/gallery/GalleryBanner/view/{slug}', [GalleryBannerController::class, 'view']);
Route::post('dashboard/website/gallery/GalleryBanner/submit', [GalleryBannerController::class, 'insert']);
Route::post('dashboard/website/gallery/GalleryBanner/update', [GalleryBannerController::class, 'update']);
Route::get('dashboard/website/gallery/GalleryBanner/softdelete/{id}', [GalleryBannerController::class, 'softdelete']);
Route::get('dashboard/website/gallery/GalleryBanner/restore/{id}', [GalleryBannerController::class, 'restore']);
Route::get('dashboard/website/gallery/GalleryBanner/delete/{id}', [GalleryBannerController::class, 'delete']);
Route::get('dashboard/website/gallery/GalleryBanner/recycle', [GalleryBannerController::class, 'recycle']);
// about gallery deafult route is start  here =========
Route::get('dashboard/website/gallery/AboutGallery', [AboutGalleryController::class, 'index']);
Route::get('dashboard/website/gallery/AboutGallery/add', [AboutGalleryController::class, 'add']);
Route::get('dashboard/website/gallery/AboutGallery/edit/{slug}', [AboutGalleryController::class, 'edit']);
Route::get('dashboard/website/gallery/AboutGallery/view/{slug}', [AboutGalleryController::class, 'view']);
Route::post('dashboard/website/gallery/AboutGallery/submit', [AboutGalleryController::class, 'insert']);
Route::post('dashboard/website/gallery/AboutGallery/update', [AboutGalleryController::class, 'update']);
Route::get('dashboard/website/gallery/AboutGallery/softdelete/{id}', [AboutGalleryController::class, 'softdelete']);
Route::get('dashboard/website/gallery/AboutGallery/restore/{id}', [AboutGalleryController::class, 'restore']);
Route::get('dashboard/website/gallery/AboutGallery/delete/{id}', [AboutGalleryController::class, 'delete']);
Route::get('dashboard/website/gallery/AboutGallery/recycle', [AboutGalleryController::class, 'recycle']);
// our corporate office is start here     
Route::get('dashboard/website/gallery/CorporateOffice', [CorporateOfficeController::class, 'index']);
Route::get('dashboard/website/gallery/CorporateOffice/add', [CorporateOfficeController::class, 'add']);
Route::get('dashboard/website/gallery/CorporateOffice/edit/{slug}', [CorporateOfficeController::class, 'edit']);
Route::get('dashboard/website/gallery/CorporateOffice/view/{slug}', [CorporateOfficeController::class, 'view']);
Route::post('dashboard/website/gallery/CorporateOffice/submit', [CorporateOfficeController::class, 'insert']);
Route::post('dashboard/website/gallery/CorporateOffice/update', [CorporateOfficeController::class, 'update']);
Route::get('dashboard/website/gallery/CorporateOffice/softdelete/{id}', [CorporateOfficeController::class, 'softdelete']);
Route::get('dashboard/website/gallery/CorporateOffice/restore/{id}', [CorporateOfficeController::class, 'restore']);
Route::get('dashboard/website/gallery/CorporateOffice/delete/{id}', [CorporateOfficeController::class, 'delete']);
Route::get('dashboard/website/gallery/CorporateOffice/recycle', [CorporateOfficeController::class, 'recycle']);
// about gallery deafult route is start  here =========
Route::get('dashboard/website/gallery/GalleryWhatwedo', [GalleryWhatwedoController::class, 'index']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/add', [GalleryWhatwedoController::class, 'add']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/edit/{slug}', [GalleryWhatwedoController::class, 'edit']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/view/{slug}', [GalleryWhatwedoController::class, 'view']);
Route::post('dashboard/website/gallery/GalleryWhatwedo/submit', [GalleryWhatwedoController::class, 'insert']);
Route::post('dashboard/website/gallery/GalleryWhatwedo/update', [GalleryWhatwedoController::class, 'update']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/softdelete/{id}', [GalleryWhatwedoController::class, 'softdelete']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/restore/{id}', [GalleryWhatwedoController::class, 'restore']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/delete/{id}', [GalleryWhatwedoController::class, 'delete']);
Route::get('dashboard/website/gallery/GalleryWhatwedo/recycle', [GalleryWhatwedoController::class, 'recycle']);
// about gallery deafult route is start  here =========
Route::get('dashboard/website/gallery/GalleryWhatidid', [GalleryWhatididController::class, 'index']);
Route::get('dashboard/website/gallery/GalleryWhatidid/add', [GalleryWhatididController::class, 'add']);
Route::get('dashboard/website/gallery/GalleryWhatidid/edit/{slug}', [GalleryWhatididController::class, 'edit']);
Route::get('dashboard/website/gallery/GalleryWhatidid/view/{slug}', [GalleryWhatididController::class, 'view']);
Route::post('dashboard/website/gallery/GalleryWhatidid/submit', [GalleryWhatididController::class, 'insert']);
Route::post('dashboard/website/gallery/GalleryWhatidid/update', [GalleryWhatididController::class, 'update']);
Route::get('dashboard/website/gallery/GalleryWhatidid/softdelete/{id}', [GalleryWhatididController::class, 'softdelete']);
Route::get('dashboard/website/gallery/GalleryWhatidid/restore/{id}', [GalleryWhatididController::class, 'restore']);
Route::get('dashboard/website/gallery/GalleryWhatidid/delete/{id}', [GalleryWhatididController::class, 'delete']);
Route::get('dashboard/website/gallery/GalleryWhatidid/recycle', [GalleryWhatididController::class, 'recycle']);
// about gallery image deafult route is start  here =========
Route::get('dashboard/website/gallery/GalleryImage', [GalleryImageController::class, 'index']);
Route::get('dashboard/website/gallery/GalleryImage/add', [GalleryImageController::class, 'add']);
Route::get('dashboard/website/gallery/GalleryImage/edit/{slug}', [GalleryImageController::class, 'edit']);
Route::get('dashboard/website/gallery/GalleryImage/view/{slug}', [GalleryImageController::class, 'view']);
Route::post('dashboard/website/gallery/GalleryImage/submit', [GalleryImageController::class, 'insert']);
Route::post('dashboard/website/gallery/GalleryImage/update', [GalleryImageController::class, 'update']);
Route::get('dashboard/website/gallery/GalleryImage/softdelete/{id}', [GalleryImageController::class, 'softdelete']);
Route::get('dashboard/website/gallery/GalleryImage/restore/{id}', [GalleryImageController::class, 'restore']);
Route::get('dashboard/website/gallery/GalleryImage/delete/{id}', [GalleryImageController::class, 'delete']);
Route::get('dashboard/website/gallery/GalleryImage/recycle', [GalleryImageController::class, 'recycle']);
// about gallery image deafult route is start  here ========= ############################################################# Volunterr banner #########################
Route::get('dashboard/website/volunteer/VolunteerBanner', [VolunteerBannerController::class, 'index']);
Route::get('dashboard/website/volunteer/VolunteerBanner/add', [VolunteerBannerController::class, 'add']);
Route::get('dashboard/website/volunteer/VolunteerBanner/edit/{slug}', [VolunteerBannerController::class, 'edit']);
Route::get('dashboard/website/volunteer/VolunteerBanner/view/{slug}', [VolunteerBannerController::class, 'view']);
Route::post('dashboard/website/volunteer/VolunteerBanner/submit', [VolunteerBannerController::class, 'insert']);
Route::post('dashboard/website/volunteer/VolunteerBanner/update', [VolunteerBannerController::class, 'update']);
Route::get('dashboard/website/volunteer/VolunteerBanner/softdelete/{id}', [VolunteerBannerController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/VolunteerBanner/restore/{id}', [VolunteerBannerController::class, 'restore']);
Route::get('dashboard/website/volunteer/VolunteerBanner/delete/{id}', [VolunteerBannerController::class, 'delete']);
Route::get('dashboard/website/volunteer/VolunteerBanner/recycle', [VolunteerBannerController::class, 'recycle']);
// ===========     Volunteer our unity deafult route is here ==========
Route::get('dashboard/website/volunteer/VolunteerOurUnity', [VolunteerOurUnityController::class, 'index']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/add', [VolunteerOurUnityController::class, 'add']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/edit/{slug}', [VolunteerOurUnityController::class, 'edit']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/view/{slug}', [VolunteerOurUnityController::class, 'view']);
Route::post('dashboard/website/volunteer/VolunteerOurUnity/submit', [VolunteerOurUnityController::class, 'insert']);
Route::post('dashboard/website/volunteer/VolunteerOurUnity/update', [VolunteerOurUnityController::class, 'update']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/softdelete/{id}', [VolunteerOurUnityController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/restore/{id}', [VolunteerOurUnityController::class, 'restore']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/delete/{id}', [VolunteerOurUnityController::class, 'delete']);
Route::get('dashboard/website/volunteer/VolunteerOurUnity/recycle', [VolunteerOurUnityController::class, 'recycle']);
// ===========     Volunteer our unity deafult route is here ==========
Route::get('dashboard/website/volunteer/OurHonesty', [OurHonestVolunteerController::class, 'index']);
Route::get('dashboard/website/volunteer/OurHonesty/add', [OurHonestVolunteerController::class, 'add']);
Route::get('dashboard/website/volunteer/OurHonesty/edit/{slug}', [OurHonestVolunteerController::class, 'edit']);
Route::get('dashboard/website/volunteer/OurHonesty/view/{slug}', [OurHonestVolunteerController::class, 'view']);
Route::post('dashboard/website/volunteer/OurHonesty/submit', [OurHonestVolunteerController::class, 'insert']);
Route::post('dashboard/website/volunteer/OurHonesty/update', [OurHonestVolunteerController::class, 'update']);
Route::get('dashboard/website/volunteer/OurHonesty/softdelete/{id}', [OurHonestVolunteerController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/OurHonesty/restore/{id}', [OurHonestVolunteerController::class, 'restore']);
Route::get('dashboard/website/volunteer/OurHonesty/delete/{id}', [OurHonestVolunteerController::class, 'delete']);
Route::get('dashboard/website/volunteer/OurHonesty/recycle', [OurHonestVolunteerController::class, 'recycle']);
// we help full route 
Route::get('dashboard/website/volunteer/WeHelpfull', [WeHelpfullController::class, 'index']);
Route::get('dashboard/website/volunteer/WeHelpfull/add', [WeHelpfullController::class, 'add']);
Route::get('dashboard/website/volunteer/WeHelpfull/edit/{slug}', [WeHelpfullController::class, 'edit']);
Route::get('dashboard/website/volunteer/WeHelpfull/view/{slug}', [WeHelpfullController::class, 'view']);
Route::post('dashboard/website/volunteer/WeHelpfull/submit', [WeHelpfullController::class, 'insert']);
Route::post('dashboard/website/volunteer/WeHelpfull/update', [WeHelpfullController::class, 'update']);
Route::get('dashboard/website/volunteer/WeHelpfull/softdelete/{id}', [WeHelpfullController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/WeHelpfull/restore/{id}', [WeHelpfullController::class, 'restore']);
Route::get('dashboard/website/volunteer/WeHelpfull/delete/{id}', [WeHelpfullController::class, 'delete']);
Route::get('dashboard/website/volunteer/WeHelpfull/recycle', [WeHelpfullController::class, 'recycle']);
// Volunteer management team 
Route::get('dashboard/website/volunteer/VolunteerManagementTeam', [VolunteerManagementTeamController::class, 'index']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/add', [VolunteerManagementTeamController::class, 'add']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/edit/{slug}', [VolunteerManagementTeamController::class, 'edit']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/view/{slug}', [VolunteerManagementTeamController::class, 'view']);
Route::post('dashboard/website/volunteer/VolunteerManagementTeam/submit', [VolunteerManagementTeamController::class, 'insert']);
Route::post('dashboard/website/volunteer/VolunteerManagementTeam/update', [VolunteerManagementTeamController::class, 'update']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/softdelete/{id}', [VolunteerManagementTeamController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/restore/{id}', [VolunteerManagementTeamController::class, 'restore']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/delete/{id}', [VolunteerManagementTeamController::class, 'delete']);
Route::get('dashboard/website/volunteer/VolunteerManagementTeam/recycle', [VolunteerManagementTeamController::class, 'recycle']);
// field worker team is here  management team 
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam', [OurFeildWorkerController::class, 'index']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/add', [OurFeildWorkerController::class, 'add']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/edit/{slug}', [OurFeildWorkerController::class, 'edit']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/view/{slug}', [OurFeildWorkerController::class, 'view']);
Route::post('dashboard/website/volunteer/OurFieldWorkerTeam/submit', [OurFeildWorkerController::class, 'insert']);
Route::post('dashboard/website/volunteer/OurFieldWorkerTeam/update', [OurFeildWorkerController::class, 'update']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/softdelete/{id}', [OurFeildWorkerController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/restore/{id}', [OurFeildWorkerController::class, 'restore']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/delete/{id}', [OurFeildWorkerController::class, 'delete']);
Route::get('dashboard/website/volunteer/OurFieldWorkerTeam/recycle', [OurFeildWorkerController::class, 'recycle']);
// our team leader controller is here  management team 
Route::get('dashboard/website/volunteer/OurTeamLeader', [OurTeamLeaderController::class, 'index']);
Route::get('dashboard/website/volunteer/OurTeamLeader/add', [OurTeamLeaderController::class, 'add']);
Route::get('dashboard/website/volunteer/OurTeamLeader/edit/{slug}', [OurTeamLeaderController::class, 'edit']);
Route::get('dashboard/website/volunteer/OurTeamLeader/view/{slug}', [OurTeamLeaderController::class, 'view']);
Route::post('dashboard/website/volunteer/OurTeamLeader/submit', [OurTeamLeaderController::class, 'insert']);
Route::post('dashboard/website/volunteer/OurTeamLeader/update', [OurTeamLeaderController::class, 'update']);
Route::get('dashboard/website/volunteer/OurTeamLeader/softdelete/{id}', [OurTeamLeaderController::class, 'softdelete']);
Route::get('dashboard/website/volunteer/OurTeamLeader/restore/{id}', [OurTeamLeaderController::class, 'restore']);
Route::get('dashboard/website/volunteer/OurTeamLeader/delete/{id}', [OurTeamLeaderController::class, 'delete']);
Route::get('dashboard/website/volunteer/OurTeamLeader/recycle', [OurTeamLeaderController::class, 'recycle']);
// =========================################################################### ============ Team Banner route is start here =============##############
Route::get('dashboard/website/team/TeamBanner', [TeamBannerController::class, 'index']);
Route::get('dashboard/website/team/TeamBanner/add', [TeamBannerController::class, 'add']);
Route::get('dashboard/website/team/TeamBanner/edit/{slug}', [TeamBannerController::class, 'edit']);
Route::get('dashboard/website/team/TeamBanner/view/{slug}', [TeamBannerController::class, 'view']);
Route::post('dashboard/website/team/TeamBanner/submit', [TeamBannerController::class, 'insert']);
Route::post('dashboard/website/team/TeamBanner/update', [TeamBannerController::class, 'update']);
Route::get('dashboard/website/team/TeamBanner/softdelete/{id}', [TeamBannerController::class, 'softdelete']);
Route::get('dashboard/website/team/TeamBanner/restore/{id}', [TeamBannerController::class, 'restore']);
Route::get('dashboard/website/team/TeamBanner/delete/{id}', [TeamBannerController::class, 'delete']);
Route::get('dashboard/website/team/TeamBanner/recycle', [TeamBannerController::class, 'recycle']);
// our team controller route 
Route::get('dashboard/website/team/OurTeam', [OurTeamController::class, 'index']);
Route::get('dashboard/website/team/OurTeam/add', [OurTeamController::class, 'add']);
Route::get('dashboard/website/team/OurTeam/edit/{slug}', [OurTeamController::class, 'edit']);
Route::get('dashboard/website/team/OurTeam/view/{slug}', [OurTeamController::class, 'view']);
Route::post('dashboard/website/team/OurTeam/submit', [OurTeamController::class, 'insert']);
Route::post('dashboard/website/team/OurTeam/update', [OurTeamController::class, 'update']);
Route::get('dashboard/website/team/OurTeam/softdelete/{id}', [OurTeamController::class, 'softdelete']);
Route::get('dashboard/website/team/OurTeam/restore/{id}', [OurTeamController::class, 'restore']);
Route::get('dashboard/website/team/OurTeam/delete/{id}', [OurTeamController::class, 'delete']);
Route::get('dashboard/website/team/OurTeam/recycle', [OurTeamController::class, 'recycle']);
// =========================################################################### ============ we do banner  route is start here =============##############
Route::get('dashboard/website/wedo/WeDoBanner', [WEDoBannerController::class, 'index']);
Route::get('dashboard/website/wedo/WeDoBanner/add', [WEDoBannerController::class, 'add']);
Route::get('dashboard/website/wedo/WeDoBanner/edit/{slug}', [WEDoBannerController::class, 'edit']);
Route::get('dashboard/website/wedo/WeDoBanner/view/{slug}', [WEDoBannerController::class, 'view']);
Route::post('dashboard/website/wedo/WeDoBanner/submit', [WEDoBannerController::class, 'insert']);
Route::post('dashboard/website/wedo/WeDoBanner/update', [WEDoBannerController::class, 'update']);
Route::get('dashboard/website/wedo/WeDoBanner/softdelete/{id}', [WEDoBannerController::class, 'softdelete']);
Route::get('dashboard/website/wedo/WeDoBanner/restore/{id}', [WEDoBannerController::class, 'restore']);
Route::get('dashboard/website/wedo/WeDoBanner/delete/{id}', [WEDoBannerController::class, 'delete']);
Route::get('dashboard/website/wedo/WeDoBanner/recycle', [WEDoBannerController::class, 'recycle']);
// we do achivment deafult route is  start here 
Route::get('dashboard/website/wedo/WedoAchivment', [WedoAchivmentController::class, 'index']);
Route::get('dashboard/website/wedo/WedoAchivment/add', [WedoAchivmentController::class, 'add']);
Route::get('dashboard/website/wedo/WedoAchivment/edit/{slug}', [WedoAchivmentController::class, 'edit']);
Route::get('dashboard/website/wedo/WedoAchivment/view/{slug}', [WedoAchivmentController::class, 'view']);
Route::post('dashboard/website/wedo/WedoAchivment/submit', [WedoAchivmentController::class, 'insert']);
Route::post('dashboard/website/wedo/WedoAchivment/update', [WedoAchivmentController::class, 'update']);
Route::get('dashboard/website/wedo/WedoAchivment/softdelete/{id}', [WedoAchivmentController::class, 'softdelete']);
Route::get('dashboard/website/wedo/WedoAchivment/restore/{id}', [WedoAchivmentController::class, 'restore']);
Route::get('dashboard/website/wedo/WedoAchivment/delete/{id}', [WedoAchivmentController::class, 'delete']);
Route::get('dashboard/website/wedo/WedoAchivment/recycle', [WedoAchivmentController::class, 'recycle']);
// service catagory one  deafult route is  start here 
Route::get('dashboard/website/wedo/ServiceCatagoryOne', [ServiceCatagoryOneController::class, 'index']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/add', [ServiceCatagoryOneController::class, 'add']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/edit/{slug}', [ServiceCatagoryOneController::class, 'edit']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/view/{slug}', [ServiceCatagoryOneController::class, 'view']);
Route::post('dashboard/website/wedo/ServiceCatagoryOne/submit', [ServiceCatagoryOneController::class, 'insert']);
Route::post('dashboard/website/wedo/ServiceCatagoryOne/update', [ServiceCatagoryOneController::class, 'update']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/softdelete/{id}', [ServiceCatagoryOneController::class, 'softdelete']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/restore/{id}', [ServiceCatagoryOneController::class, 'restore']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/delete/{id}', [ServiceCatagoryOneController::class, 'delete']);
Route::get('dashboard/website/wedo/ServiceCatagoryOne/recycle', [ServiceCatagoryOneController::class, 'recycle']);
// service catagory one  deafult route is  start here 
Route::get('dashboard/website/wedo/ServiceCatagoryTwo', [ServiceCatagoryTwoController::class, 'index']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/add', [ServiceCatagoryTwoController::class, 'add']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/edit/{slug}', [ServiceCatagoryTwoController::class, 'edit']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/view/{slug}', [ServiceCatagoryTwoController::class, 'view']);
Route::post('dashboard/website/wedo/ServiceCatagoryTwo/submit', [ServiceCatagoryTwoController::class, 'insert']);
Route::post('dashboard/website/wedo/ServiceCatagoryTwo/update', [ServiceCatagoryTwoController::class, 'update']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/softdelete/{id}', [ServiceCatagoryTwoController::class, 'softdelete']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/restore/{id}', [ServiceCatagoryTwoController::class, 'restore']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/delete/{id}', [ServiceCatagoryTwoController::class, 'delete']);
Route::get('dashboard/website/wedo/ServiceCatagoryTwo/recycle', [ServiceCatagoryTwoController::class, 'recycle']);
// where we work  deafult route is  start here ##########################################################################################################
Route::get('dashboard/website/wherewework/WhereWework', [WhereWeworkController::class, 'index']);
Route::get('dashboard/website/wherewework/WhereWework/add', [WhereWeworkController::class, 'add']);
Route::get('dashboard/website/wherewework/WhereWework/edit/{slug}', [WhereWeworkController::class, 'edit']);
Route::get('dashboard/website/wherewework/WhereWework/view/{slug}', [WhereWeworkController::class, 'view']);
Route::post('dashboard/website/wherewework/WhereWework/submit', [WhereWeworkController::class, 'insert']);
Route::post('dashboard/website/wherewework/WhereWework/update', [WhereWeworkController::class, 'update']);
Route::get('dashboard/website/wherewework/WhereWework/softdelete/{id}', [WhereWeworkController::class, 'softdelete']);
Route::get('dashboard/website/wherewework/WhereWework/restore/{id}', [WhereWeworkController::class, 'restore']);
Route::get('dashboard/website/wherewework/WhereWework/delete/{id}', [WhereWeworkController::class, 'delete']);
Route::get('dashboard/website/wherewework/WhereWework/recycle', [WhereWeworkController::class, 'recycle']);
// become volunteer   deafult route is  start here ##########################################################################################################
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer', [BecomeVolunteerNewController::class, 'index']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/add', [BecomeVolunteerNewController::class, 'add']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/view/{slug}', [BecomeVolunteerNewController::class, 'view']);
Route::post('dashboard/website/BecomeVolunteer/BcomeVolunteer/submit', [BecomeVolunteerNewController::class, 'insert']);
Route::post('dashboard/website/BecomeVolunteer/BcomeVolunteer/update', [BecomeVolunteerNewController::class, 'update']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/softdelete/{id}', [BecomeVolunteerNewController::class, 'softdelete']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/restore/{id}', [BecomeVolunteerNewController::class, 'restore']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/delete/{id}', [BecomeVolunteerNewController::class, 'delete']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteer/recycle', [BecomeVolunteerNewController::class, 'recycle']);
// add become volunteer 
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner', [BcomeVolunteerBannerController::class, 'index']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/add', [BcomeVolunteerBannerController::class, 'add']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/edit/{slug}', [BcomeVolunteerBannerController::class, 'edit']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/view/{slug}', [BcomeVolunteerBannerController::class, 'view']);
Route::post('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/submit', [BcomeVolunteerBannerController::class, 'insert']);
Route::post('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/update', [BcomeVolunteerBannerController::class, 'update']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/softdelete/{id}', [BcomeVolunteerBannerController::class, 'softdelete']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/restore/{id}', [BcomeVolunteerBannerController::class, 'restore']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/delete/{id}', [BcomeVolunteerBannerController::class, 'delete']);
Route::get('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner/recycle', [BcomeVolunteerBannerController::class, 'recycle']);


// Contact route is start here  
Route::get('dashboard/website/contact/ContactMassage', [ContactMassagesController::class, 'index']);
Route::get('dashboard/website/contact/ContactMassage/add', [ContactMassagesController::class, 'add']);
Route::get('dashboard/website/contact/ContactMassage/edit/{slug}', [ContactMassagesController::class, 'edit']);
Route::get('dashboard/website/contact/ContactMassage/view/{slug}', [ContactMassagesController::class, 'view']);
Route::post('dashboard/website/contact/ContactMassage/submit', [ContactMassagesController::class, 'insert']);
Route::post('dashboard/website/contact/ContactMassage/update', [ContactMassagesController::class, 'update']);
Route::get('dashboard/website/contact/ContactMassage/softdelete/{id}', [ContactMassagesController::class, 'softdelete']);
Route::get('dashboard/website/contact/ContactMassage/restore/{id}', [ContactMassagesController::class, 'restore']);
Route::get('dashboard/website/contact/ContactMassage/delete/{id}', [ContactMassagesController::class, 'delete']);
Route::get('dashboard/website/contact/ContactMassage/recycle', [ContactMassagesController::class, 'recycle']);
// contact banner 
Route::get('dashboard/website/Contact/BannerContact', [ContactBannerController::class, 'index']);
Route::get('dashboard/website/Contact/BannerContact/add', [ContactBannerController::class, 'add']);
Route::get('dashboard/website/Contact/BannerContact/edit/{slug}', [ContactBannerController::class, 'edit']);
Route::get('dashboard/website/Contact/BannerContact/view/{slug}', [ContactBannerController::class, 'view']);
Route::post('dashboard/website/Contact/BannerContact/submit', [ContactBannerController::class, 'insert']);
Route::post('dashboard/website/Contact/BannerContact/update', [ContactBannerController::class, 'update']);
Route::get('dashboard/website/Contact/BannerContact/softdelete/{id}', [ContactBannerController::class, 'softdelete']);
Route::get('dashboard/website/Contact/BannerContact/restore/{id}', [ContactBannerController::class, 'restore']);
Route::get('dashboard/website/Contact/BannerContact/delete/{id}', [ContactBannerController::class, 'delete']);
Route::get('dashboard/website/Contact/BannerContact/recycle', [ContactBannerController::class, 'recycle']);
// contact banner 
Route::get('dashboard/website/Contact/ContactDetails', [ContactDetailsController::class, 'index']);
Route::get('dashboard/website/Contact/ContactDetails/add', [ContactDetailsController::class, 'add']);
Route::get('dashboard/website/Contact/ContactDetails/edit/{slug}', [ContactDetailsController::class, 'edit']);
Route::get('dashboard/website/Contact/ContactDetails/view/{slug}', [ContactDetailsController::class, 'view']);
Route::post('dashboard/website/Contact/ContactDetails/submit', [ContactDetailsController::class, 'insert']);
Route::post('dashboard/website/Contact/ContactDetails/update', [ContactDetailsController::class, 'update']);
Route::get('dashboard/website/Contact/ContactDetails/softdelete/{id}', [ContactDetailsController::class, 'softdelete']);
Route::get('dashboard/website/Contact/ContactDetails/restore/{id}', [ContactDetailsController::class, 'restore']);
Route::get('dashboard/website/Contact/ContactDetails/delete/{id}', [ContactDetailsController::class, 'delete']);
Route::get('dashboard/website/Contact/ContactDetails/recycle', [ContactDetailsController::class, 'recycle']);
// anage controller 
Route::get('dashboard/website/manage/OurSocial', [SocialController::class, 'index']);
Route::get('dashboard/website/manage/OurSocial/add', [SocialController::class, 'add']);
Route::get('dashboard/website/manage/OurSocial/edit/{slug}', [SocialController::class, 'edit']);
Route::get('dashboard/website/manage/OurSocial/view/{slug}', [SocialController::class, 'view']);
Route::post('dashboard/website/manage/OurSocial/submit', [SocialController::class, 'insert']);
Route::post('dashboard/website/manage/OurSocial/update', [SocialController::class, 'update']);
Route::get('dashboard/website/manage/OurSocial/softdelete/{id}', [SocialController::class, 'softdelete']);
Route::get('dashboard/website/manage/OurSocial/restore/{id}', [SocialController::class, 'restore']);
Route::get('dashboard/website/manage/OurSocial/delete/{id}', [SocialController::class, 'delete']);
Route::get('dashboard/website/manage/OurSocial/recycle', [SocialController::class, 'recycle']);
// team social 
Route::get('dashboard/website/manage/TeamSocial', [TeamSocialController::class, 'index']);
Route::get('dashboard/website/manage/TeamSocial/add', [TeamSocialController::class, 'add']);
Route::get('dashboard/website/manage/TeamSocial/edit/{slug}', [TeamSocialController::class, 'edit']);
Route::get('dashboard/website/manage/TeamSocial/view/{slug}', [TeamSocialController::class, 'view']);
Route::post('dashboard/website/manage/TeamSocial/submit', [TeamSocialController::class, 'insert']);
Route::post('dashboard/website/manage/TeamSocial/update', [TeamSocialController::class, 'update']);
Route::get('dashboard/website/manage/TeamSocial/softdelete/{id}', [TeamSocialController::class, 'softdelete']);
Route::get('dashboard/website/manage/TeamSocial/restore/{id}', [TeamSocialController::class, 'restore']);
Route::get('dashboard/website/manage/TeamSocial/delete/{id}', [TeamSocialController::class, 'delete']);
Route::get('dashboard/website/manage/TeamSocial/recycle', [TeamSocialController::class, 'recycle']);
// web footr  
Route::get('dashboard/website/manage/WebFooter', [FooterController::class, 'index']);
Route::get('dashboard/website/manage/WebFooter/add', [FooterController::class, 'add']);
Route::get('dashboard/website/manage/WebFooter/edit/{slug}', [FooterController::class, 'edit']);
Route::get('dashboard/website/manage/WebFooter/view/{slug}', [FooterController::class, 'view']);
Route::post('dashboard/website/manage/WebFooter/submit', [FooterController::class, 'insert']);
Route::post('dashboard/website/manage/WebFooter/update', [FooterController::class, 'update']);
Route::get('dashboard/website/manage/WebFooter/softdelete/{id}', [FooterController::class, 'softdelete']);
Route::get('dashboard/website/manage/WebFooter/restore/{id}', [FooterController::class, 'restore']);
Route::get('dashboard/website/manage/WebFooter/delete/{id}', [FooterController::class, 'delete']);
Route::get('dashboard/website/manage/WebFooter/recycle', [FooterController::class, 'recycle']);
// web footr  
Route::get('dashboard/website/manage/WebHeader', [HeaderController::class, 'index']);
Route::get('dashboard/website/manage/WebHeader/add', [HeaderController::class, 'add']);
Route::get('dashboard/website/manage/WebHeader/edit/{slug}', [HeaderController::class, 'edit']);
Route::get('dashboard/website/manage/WebHeader/view/{slug}', [HeaderController::class, 'view']);
Route::post('dashboard/website/manage/WebHeader/submit', [HeaderController::class, 'insert']);
Route::post('dashboard/website/manage/WebHeader/update', [HeaderController::class, 'update']);
Route::get('dashboard/website/manage/WebHeader/softdelete/{id}', [HeaderController::class, 'softdelete']);
Route::get('dashboard/website/manage/WebHeader/restore/{id}', [HeaderController::class, 'restore']);
Route::get('dashboard/website/manage/WebHeader/delete/{id}', [HeaderController::class, 'delete']);
Route::get('dashboard/website/manage/WebHeader/recycle', [HeaderController::class, 'recycle']);





Route::get('join', [JoinController::class, 'index']);
Route::get('join/profile/manage/view/{id}', [JoinController::class, 'join']);

Route::get('example', [JoinController::class, 'example']);
















require __DIR__.'/auth.php';
