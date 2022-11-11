<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OurPartnersController;
use App\Http\Controllers\TrainingProgramController;
use App\Http\Controllers\NewsAndMediaController;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\SteeringcommitteeController;
use App\Http\Controllers\AluminiassciationController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AdminhomepageController;
use App\Http\Controllers\HomepageshowController;
use App\Http\Controllers\AdminhomepageupdateController;
use App\Http\Controllers\SteeringCommitteeUpdateController;
use App\Http\Controllers\AlumniAssociationUpdateController;
use App\Http\Controllers\AdminCohortController;
use App\Http\Controllers\AdminCohortsimgandtextController;
use App\Http\Controllers\SteeringCommitteeImageUploadController;
use App\Http\Controllers\AdminSteeringController;
use App\Http\Controllers\AAimageController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminaboutController;
use App\Http\Controllers\PartnoreController;
use App\Http\Controllers\AdminaboutindexController;
use App\Http\Controllers\AdminTrainingController;
use App\Http\Controllers\AdmincontactController;
use App\Http\Controllers\AdminTitleController;
use App\Http\Controllers\AdmintitleimagesController;
use App\Http\Controllers\FindeController;
use App\Http\Controllers\TrainingckeditorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;



use App\Http\Controllers\AdminCohorttextinsertController;
use App\Http\Controllers\CohortTextPagesController;
use App\Http\Controllers\AdminCohortGroupCreateController;
use App\Http\Controllers\AdminFooterController;
use App\Http\Controllers\CkeditorController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
Route::get('/clear-cache', function() {

        $run = Artisan::call('config:clear');

        $run = Artisan::call('cache:clear');

        $run = Artisan::call('migrate');

        return 'FINISHED';  

    });
Auth::routes();


Route::get('/', function () {
          return redirect('/'.app()->getLocale());
      });
      
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('{locale?}')->name('locale.')->group(function (){

    Route::get('/',[HomepageController::class,'index'])->name('index');
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::get('/our_partners',[OurPartnersController::class,'index'])->name('our_partners');
    // Route::get('/partner/{id}',[OurPartnersController::class,'show'])->name('partners');
   
    Route::get('/news',[NewsAndMediaController::class,'index'])->name('news&media');
    Route::get('/news/{id}',[NewsAndMediaController::class,'show'])->name('news');
    
    Route::get('/cohorts',[CohortsController::class,'index'])->name('')->name('cohorts');
    Route::get('/steeringcommittee',[SteeringcommitteeController::class,'index'])->name('steeringcommittee');
    Route::get('/aluminiassciation',[AluminiassciationController::class,'index'])->name('aluminiassciation');
    Route::get('/contactus',[ContactusController::class,'index'])->name('contactus');
   
   
    Route::get('/training_programs',[TrainingckeditorController::class,'index'])->name('training_program_ckeditor');

});

// role and prmishen  middleware
Route::group(['middleware' => ['auth']], function() { 
Route::get('/admin/adminhomepageshowhomepage',[AdminhomepageController::class,'index']);
Route::get('/admin',[HomepageshowController::class,'index'])->name('adminhomepageshow');

// Creating new controller for  working admin panel HomepageshowController,AdminhomepageupdateController table  insert data,show and update data routs start
Route::get('/admin/adminhomepageshow',[HomepageshowController::class,'index'])->name('adminhomepageshow');
Route::post('/admin/adminhomepageshow',[HomepageshowController::class,'store'])->name('homepageshow.store');
Route::get('/admin/tableupdatedelete',[AdminhomepageupdateController::class,'index'])->name('tableupdatedelete');
Route::get('/admin/edithomepage/{homepageid}',[AdminhomepageupdateController::class,'show'])->name('edithomepagecreate');
Route::post('/admin/edithomepage',[AdminhomepageupdateController::class,'update'])->name('updatehomepage');
//Creating new controller for  working admin panel HomepageshowController,AdminhomepageupdateController table  insert data,show and update data routs end

// Creating new controller for  working admin panel AdminCohortController table show and update routs start
Route::get('/admin/admin_cohorts',[AdminCohortController::class,'index'])->name('cohort_first_text_show');
Route::get('admin/admin_cohorts_first_text_edit/{cohorts_id}',[AdminCohortController::class,'show'])->name('admin_cohorts_first_text_edit');
Route::post('admin/admin_cohorts_first_text_update',[AdminCohortController::class,'update'])->name('admin_cohorts_first_text_update');
// Cohorts image and text inserted route start
Route::get('admin/admin_cohorts_img_and_text',[AdminCohortsimgandtextController::class,'index'])->name('admin_cohorts_img_and_text');
Route::get('admin/admin_cohort_infos_img_text_form', [AdminCohortsimgandtextController::class,'create'])->name('admin_cohort_infos_img_text_form');
Route::post('admin/admin_cohort_infos_img_text_inserted',[AdminCohortsimgandtextController::class,'store'])->name('admin_cohort_infos_img_text_inserted');

    
    Route::get('admin/admin_cohort_text_insertform',[AdminCohorttextinsertController::class,'index'])->name('admin_cohort_text_insertform');
    Route::post('admin/admin_cohort_text_insertform_inserted',[AdminCohorttextinsertController::class,'store'])->name('admin_cohort_text_insertform_inserted');

    Route::get('admin/cohort_text_all',[CohortTextPagesController::class,'index'])->name('cohort_text_all');
    
    Route::get('/admin/admin_cohort_text_edit/{id}',[CohortTextPagesController::class,'edit'])->name('admin_cohort_text_edit');
    Route::post('/admin/admin_cohort_text_update',[CohortTextPagesController::class,'update'])->name('admin_cohort_text_update');
    Route::get('/admin/admin_cohort_text_delete/{id}',[CohortTextPagesController::class,'delete'])->name('admin_cohort_text_delete');
    
    Route::get('/admin/admin_cohort_group_insertform',[AdminCohortGroupCreateController::class,'index'])->name('admin_cohort_group_create');
    Route::post('/admin/admin_cohort_group_insertform',[AdminCohortGroupCreateController::class,'store'])->name('admin_cohort_group_insertform_inserted');
    Route::get('/admin/admin_cohort_group_show',[AdminCohortGroupCreateController::class,'create'])->name('admin_cohort_group_show');
    Route::get('/admin/admin_cohort_group_edit/{id}',[AdminCohortGroupCreateController::class,'edit'])->name('admin_cohort_group_edit');
    Route::post('/admin/admin_cohort_update',[AdminCohortGroupCreateController::class,'update'])->name('admin_cohort_update_update');
    Route::get('/admin/admin_cohort_group_delete/{id}',[AdminCohortGroupCreateController::class,'delete'])->name('admin_cohort_group_delete');
    // Cohorts image and text inserted route end
// Creating new controller for  working admin panel  AdminCohortController table show and update routs end




// Creating new controller for  working admin panel Steering_Committee table show and update routs start
       Route::get('/admin/admin_Steering_Committee',[SteeringCommitteeUpdateController::class,'index'])->name('admin_Steering_Committee');
       Route::get('admin/admin_steering_committee_edit/{steering_Id}',[SteeringCommitteeUpdateController::class,'show'])->name('admin_steering_committee_edit');
       Route::post('/admin/admin_steering_committee_update',[SteeringCommitteeUpdateController::class,'update'])->name('admin_steering_committee_update');
       Route::get('/admin/admin_steering_committee_image_table_show',[AdminSteeringController::class,'index'])->name('admin_steering_committee_image_table_show');
       Route::get('/admin/admin_steering_committee_image_edit/{img_id}',[AdminSteeringController::class,'edit'])->name('admin_steering_committee_image_edit');
       Route::post('/admin/admin_steering_committee_image_update',[AdminSteeringController::class,'update'])->name('admin_steering_committee_image_update');
        Route::get('/admin/admin_steering_committee_image_delete/{id}',[AdminSteeringController::class,'delete'])->name('admin_steering_committee_image_delete');




   //Routes for uploading  img for steering committee blade start
      Route::get ('/admin/admin_steering_committe_img_form',[SteeringCommitteeImageUploadController::class,'index'])->name('admin_steering_committe_img_form');
      Route::post('/admin/admin_steering_committe_img_upload',[SteeringCommitteeImageUploadController::class,'store'])->name('admin_steering_committe_img_upload');
   // Routes for uploading  img for steering committee blade end
//Steering_Committee table show and update routs end

// Creating new controller for  working admin panel Alumni_Association table show and update routs start
Route::get('/admin/admin_Alumni_Association',[AlumniAssociationUpdateController::class,'index'])->name('admin_Alumni_Association');
Route::get('/admin/admin_Alumni_Association_edit/{alumni_Id}',[AlumniAssociationUpdateController::class,'show'])->name('admin_Alumni_Association_edit');
Route::post('/admin/admin_Alumni_Association_updated',[AlumniAssociationUpdateController::class,'update'])->name('admin_Alumni_Association_updated');
//Alumni_Association table show and update routs end

Route::get('/admin/admin_Alumni_Association_image',[AAimageController::class,'index'])->name('admin_Alumni_Association_image');
Route::post('/admin/admin_Alumni_Association_image_insert',[AAimageController::class,'insert'])->name('admin_Alumni_Association_image_insert');
Route::get('/admin/admin_Alumni_Association_image_table_show',[AAimageController::class,'create'])->name('admin_Alumni_Association_image_table_show');
Route::get('/admin/admin_Alumni_Association_image_edit/{id}',[AAimageController::class,'edit'])->name('admin_Alumni_Association_image_edit');
Route::post('/admin/admin_Alumni_Association_image_edit',[AAimageController::class,'update'])->name('admin_Alumni_Association_image_update');

Route::get('/admin/admin_Alumni_Association_image_delete/{id}',[AAimageController::class,'delete'])->name('admin_Alumni_Association_image_delete');


// news admin route
Route::get('/admin/admin_news_and_events',[AdminNewsController::class,'index'])->name('admin_news_and_events');
Route::get('/admin/admin_news_and_events_add',[AdminNewsController::class,'insert_page'])->name('admin_news_and_events_add');
Route::post('/admin/admin_news_and_events_add',[AdminNewsController::class,'insert'])->name('admin_news_and_events_add');
Route::get('/admin/admin_news_and_events_delete/{id}',[AdminNewsController::class,'delete'])->name('admin_news_and_events_delete');
Route::get('/admin/admin_news_edit/{id}',[AdminNewsController::class,'edit'])->name('admin_news_edit');

Route::post('/admin/admin_news_edit',[AdminNewsController::class,'update'])->name('admin_news_update');


// about admin route

Route::get('/admin/admin_about_edit',[AdminaboutController::class,'index'])->name('admin_about_edit');
Route::post('/admin/admin_about_edit',[AdminaboutController::class,'update'])->name('admin_about_update');



// about partnore route

Route::get('/admin/admin_partnore_add',[PartnoreController::class,'index'])->name('admin_partnore_add');
Route::get('/admin/admin_partnore_add_page',[PartnoreController::class,'create'])->name('admin_partnore_add_page');
Route::post('/admin/admin_partnore_add',[PartnoreController::class,'add'])->name('admin_partnore_add');
Route::get('/admin/admin_partnore_edit/{id}',[PartnoreController::class,'edit'])->name('admin_partnore_edit');
Route::post('/admin/admin_partnore_update',[PartnoreController::class,'update'])->name('admin_partnore_update');
Route::get('/admin/admin_partnore_delete/{id}',[PartnoreController::class,'delete'])->name('admin_partnore_delete');

// about index admin route
Route::get('/admin/admin_aboutindex_edit',[AdminaboutindexController::class,'index'])->name('admin_aboutindex_edit');
Route::post('/admin/admin_aboutindex_edit',[AdminaboutindexController::class,'update'])->name('admin_aboutindex_edit');

// countact admin route
Route::get('/admin/admin_conatct_edit',[AdmincontactController::class,'index'])->name('admin_conatct_edit');
Route::post('/admin/admin_conatct_update',[AdmincontactController::class,'update'])->name('admin_conatct_update');


// about Training Programs route

Route::get('/admin/admin_training_add',[AdminTrainingController::class,'index'])->name('admin_training_add');
Route::get('/admin/admin_training_create',[AdminTrainingController::class,'create'])->name('admin_training_create');
Route::post('/admin/admin_training_add',[AdminTrainingController::class,'add'])->name('admin_training_add');
Route::get('/admin/admin_training_edit/{id}',[AdminTrainingController::class,'edit'])->name('admin_training_edit');
Route::post('/admin/admin_training_update',[AdminTrainingController::class,'update'])->name('admin_training_update');
Route::get('/admin/admin_training_delete/{id}',[AdminTrainingController::class,'delete'])->name('admin_training_delete');

// title admin route

Route::get('/admin/admin_title',[AdminTitleController::class,'index'])->name('admin_title');
Route::post('/admin/admin_title_update',[AdminTitleController::class,'update'])->name('admin_title_update');

Route::get('/admin/admin_title_image',[AdmintitleimagesController::class,'index'])->name('admin_title_image');
Route::post('/admin/admin_title_image_upload',[AdmintitleimagesController::class,'store'])->name('admin_title_image_upload');
Route::get('/admin/admin_title_image_show',[AdmintitleimagesController::class,'create'])->name('admin_title_image_show');
Route::get('/admin/admin_title_image_edit/{id}',[AdmintitleimagesController::class,'edit'])->name('admin_title_image_edit');
Route::post('/admin/admin_title_image_update',[AdmintitleimagesController::class,'update'])->name('admin_title_image_update');
Route::get('/admin/admin_title_image_delete/{id}',[AdmintitleimagesController::class,'delete'])->name('admin_title_image_delete');

//footer admin route
Route::get('/admin/admin_footer_update_form',[AdminFooterController::class,'index'])->name('admin_footer_update_form');
Route::post('admin/admin_footer_update_form',[AdminFooterController::class,'update'])->name('admin_footer_update');
Route::get('footer',[AdminFooterController::class,'create']);

//admin training ckeditor routs right way

Route::get('admin/admin_ckeditor',[CkeditorController::class,'index'])->name('admin_training_ckeditor');
Route::post('admin/upload',[CkeditorController::class,'upload'])->name('upload');
Route::post('admin/uploaded',[CkeditorController::class,'upload_form'])->name('upload_form');
Route::get('admin/admin_training_table_show',[CkeditorController::class,'table_show'])->name('admin_training_table_show');
Route::get('admin/admin_trainig_edit/{id}', [CkeditorController::class,'edit'])->name('admin_trainig_edit');
Route::post('admin/admin_training_update',[CkeditorController::class,'update'])->name('admin_training_update');
Route::get('admin/admin_training_delete/{id}',[CkeditorController::class,'destroy'])->name('admin_training_delete');

});


// url run defult lang
Route::post('/finde',[FindeController::class,'index']);
Route::post('/contactus',[ContactusController::class,'store'])->name('contactussend');












