<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\UielementsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ExtrasController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\LoginController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => ['web']], function () {

    Route::resource('login',LoginController::class);
        
    Route::group(['middleware' => ['Adminx']], function () {
			
        Route::get('/',[HomeController::class, 'index']);        
        Route::get('nextPage',[HomeController::class, 'nextpage']);
        Route::post('nextPage',[HomeController::class, 'nextpage']);
        Route::get('dashboard/{id?}',[DashboardController::class, 'sample']);
        Route::get('widgets',[WidgetsController::class, 'index']);
        Route::group(['prefix' => 'layout'], function () {
            Route::get('top-nav',[LayoutsController::class, 'topnav']);
            Route::get('top-nav-sidebar',[LayoutsController::class, 'topnavsidebar']);
            Route::get('boxed',[LayoutsController::class, 'boxed']);
            Route::get('fixed-sidebar',[LayoutsController::class, 'fixedsidebar']);
            Route::get('fixed-sidebar-custom',[LayoutsController::class, 'fixedsidebarcustom']);
            Route::get('fixed-topnav',[LayoutsController::class, 'fixedtopnav']);
            Route::get('fixed-footer',[LayoutsController::class, 'fixedfooter']);
            Route::get('collapsed-sidebar',[LayoutsController::class, 'collapsedsidebar']);
        });
        Route::get('charts/chartjs',[ChartsController::class, 'chartjs']);
        Route::get('charts/flot',[ChartsController::class, 'flot']);
        Route::get('charts/inline',[ChartsController::class, 'inline']);
        Route::get('charts/uplot',[ChartsController::class, 'uplot']);
        Route::group(['prefix' => 'UI'], function () {
            Route::get('general',[UielementsController::class, 'general']);
            Route::get('icons',[UielementsController::class, 'icons']);
            Route::get('buttons',[UielementsController::class, 'buttons']);
            Route::get('sliders',[UielementsController::class, 'sliders']);
            Route::get('modals',[UielementsController::class, 'modals']);
            Route::get('navbar',[UielementsController::class, 'navbar']);
            Route::get('timeline',[UielementsController::class, 'timeline']);
            Route::get('ribbons',[UielementsController::class, 'ribbons']);
        });
        Route::group(['prefix' => 'forms'], function () {
            Route::get('general',[FormsController::class, 'general']);
            Route::get('advanced',[FormsController::class, 'advanced']);
            Route::get('editors',[FormsController::class, 'editors']);
            Route::get('validation',[FormsController::class, 'validation']);
        });
        Route::group(['prefix' => 'tables'], function () {
            Route::get('simple',[TablesController::class, 'simple']);
            Route::get('datas',[TablesController::class, 'datas']);
            Route::get('jsgrid',[TablesController::class, 'jsgrid']);
        });
        Route::get('calendar',[CalendarController::class, 'index']);
        Route::get('gallery',[GalleryController::class, 'index']);
        Route::get('kanban',[KanbanController::class, 'index']);
        Route::group(['prefix' => 'mailbox'], function () {
            Route::get('inbox',[MailboxController::class, 'inbox']);
            Route::get('compose',[MailboxController::class, 'compose']);
            Route::get('read-mail',[MailboxController::class, 'read']);
        });
        Route::group(['prefix' => 'pages'], function () {
            Route::get('invoice',[PagesController::class, 'invoice']);
            Route::get('profile',[PagesController::class, 'profile']);
            Route::get('e-commerce',[PagesController::class, 'ecommerce']);
            Route::get('projects',[PagesController::class, 'projects']);
            Route::get('project-add',[PagesController::class, 'projectadd']);
            Route::get('project-edit',[PagesController::class, 'projectedit']);
            Route::get('project-detail',[PagesController::class, 'projectdetail']);
            Route::get('contacts',[PagesController::class, 'contacts']);
            Route::get('faq',[PagesController::class, 'faq']);
            Route::get('contact-us',[PagesController::class, 'contactus']);
        });
        
        Route::resource('admins',AdminsController::class);
        Route::get('admin_toggle/{id?}',[AdminsController::class,'toggle']);
        
        Route::group(['prefix' => 'extras'], function () {
            
            Route::get('login.html',[ExtrasController::class, 'login']);
            Route::get('login-v2.html',[ExtrasController::class, 'loginv2']);
            Route::get('register.html',[ExtrasController::class, 'register']);
            Route::get('register-v2.html',[ExtrasController::class, 'registerv2']);
            Route::get('register.html',[ExtrasController::class, 'register']);
            Route::get('forgot-password.html',[ExtrasController::class, 'forgotpassword']);
            Route::get('forgot-password-v2.html',[ExtrasController::class, 'forgotpasswordv2']);
            Route::get('recover-password.html',[ExtrasController::class, 'recoverpassword']);
            Route::get('recover-password-v2.html',[ExtrasController::class, 'recoverpasswordv2']);
            Route::get('lockscreen.html',[ExtrasController::class, 'lockscreen']);
            Route::get('legacy-user-menu.html',[ExtrasController::class, 'legacy']);
            Route::get('language-menu.html',[ExtrasController::class, 'language']);
            Route::get('404.html',[ExtrasController::class, 'error404']);
            Route::get('500.html',[ExtrasController::class, 'error500']);
            Route::get('pace.html',[ExtrasController::class, 'pace']);
            Route::get('blank.html',[ExtrasController::class, 'blank']);
            Route::get('starter.html',[ExtrasController::class, 'starter']);
        });
        Route::group(['prefix' => 'search'], function () {           
            Route::get('simple.html',[SearchController::class, 'simple']);
            Route::get('simple-results.html',[SearchController::class, 'simpleresults']);
            Route::get('enhanced.html',[SearchController::class, 'enhanced']);
            Route::get('enhanced-results.html',[SearchController::class, 'enhancedresults']);
        });
        Route::group(['prefix' => 'docs'], function () {           
            Route::get('installation.html',[DocsController::class,'installation']);
            Route::get('about-me.html',[DocsController::class,'aboutme']);
        });
        Route::get('iframe.html',[MiscellaneousController::class,'iframe']);
        Route::get('iframe-dark.html',[MiscellaneousController::class,'iframedark']);        
        Route::get('logout',[LoginController::class,'logout']);
        
    });
    
});
