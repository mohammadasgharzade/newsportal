<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AdminController;

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




################################################################
// Admin Route //
################################################################ 

Route::group(['prefix'=>'admin'], function() {

 // 'middleware' => ['web', 'auth']], 
 Route::group([ 'prefix' => 'laravel-filemanager' , 'middleware' => ['auth']],function () {
  Lfm::routes();
}); 
    //# Dashboard Route #
    Route::get('/','AdminController@dashboard');
    
    //# Category Routes #
    Route::get('/viewcategory','AdminController@category_index');
    Route::get('/vieweditcategory/{id}','AdminController@category_edit')->name('editcategory');
    Route::post('/addcategory','CrudController@category_insert')->name('addcategory')->middleware('AdminAndSardabir');
    Route::post('/updatecategroy/update/{id}','CrudController@updateData')->name('updatecategory');
    Route::get('/category/delete/{id}', 'AdminController@Categorydelete')->name('category.delete');

      //# Subcategory Routes #
     Route::get('/subcategory/{id}','AdminController@subcategory_index')->name('subcategory.index');
     Route::post('/addsubcategory','CrudController@subcategory_insert')->name('addsubcategory')->middleware('AdminAndSardabir');
     Route::get('/editsubcategory/{id}/{category_id}','AdminController@subcategory_edit')->name('editsubcategory');
     Route::post('/updatesubcategroy/update/{id}','CrudController@subcategory_update')->name('updatesubcategory');
     Route::get('/subcategoryDetach/{id}/{catid}','AdminController@subcategory_Detach')->name('subcat.delete');
     Route::get('/subshowDelete/{id}','AdminController@subshow_Delete')->name('subshow.delete');
     Route::get('/subshow','AdminController@subshow');
    Route::get('/subshow_edit/{id}/{category_id}','AdminController@subshow_edit')->name('subshow.edit');

    //# Tags
    Route::get('viewtag/index','AdminController@tag_index')->name('tag.index');
    Route::get('viewtag/delete/{id}','AdminController@delete_tag')->name('tag.delete');
    Route::get('viwtag_edit/{id}','Admincontroller@tag_edit')->name('tag.edit');
    Route::post('viewtag/update/{id}','AdminController@tag_update')->name('tag.update');
    //# Post Routes #
    Route::get('/viewpost','AdminController@post_index');
    Route::get('/postcreate','AdminController@post_create')->middleware('AdminAndSardabir');
    Route::post('/addpost','CrudController@post_insert')->name('addpost')->middleware('AdminAndSardabir');
    Route::post('/updatepost/{id}','CrudController@post_update')->name('updatepost');
    Route::get('/editpost/{id}','AdminController@post_edit')->name('editpost');
    Route::get('/deletepost/{id}','AdminController@post_delete')->name('deletepost');

    //# Setting Route #
    Route::middleware('Admin')->group(function () {
      Route::get('/setting','AdminController@setting')->name('setting.index');
      Route::post('/addsetting','CrudController@setting_insert')->name('addsetting');
      Route::post('/updatesetting/{id}','CrudController@setting_update')->name('updatesetting');
    });

    Route::delete('/multipledelete','AdminController@multipleDelete')->name('multipledelete');

    //# Gallary Route #
    Route::get('/add_gallary','AdminController@gallary_create')->middleware('AdminAndSardabir');
    Route::post('/create_image','CrudController@gallary_image_create')->name('create_image')->middleware('AdminAndSardabir');
    Route::get('/image_gallary','AdminController@gallary_index');
    Route::get('/gallary_show/{id}','AdminController@gallary_show')->name('gallary_show');
    Route::post('/gallary_update/{id}','CrudController@gallary_update')->name('gallary.update');
    Route::get('/delete_image/{id}','AdminController@delete_image')->name('image.delete');
    Route::get('/delete_gallary/{id}','AdminController@delete_gallary')->name('gallary.delete');

    Route::get('/video_delete/{id}','AdminController@video_delete')->name('video.delete');
    Route::post('/video/update/{id}','CrudController@video_update')->name('video.update');

    //# Video Route #
    Route::get('add_video','AdminController@video_create')->middleware('AdminAndSardabir');
    Route::post('/video_create','CrudController@video_create')->name('video_create')->middleware('AdminAndSardabir');
    Route::get('/video_index','AdminController@video_index');
    Route::get('/video_edit/{id}','AdminController@video_edit')->name('video_edit');

    //# Ad Route #
    Route::middleware('AdminAndSardabir')->group(function () {
      Route::get('create_ad','AdminController@ad_create');
      Route::get('ad_index','AdminController@ad_index');
      Route::get('ad_delete/{id}','AdminController@ad_delete')->name('ad.delete');
      Route::get('ad_edit/{id}','AdminController@ad_edit')->name('ad.edit');
      Route::post('ad_insert','CrudController@ad_insert')->name('ad.insert');
      Route::post('ad_update/{id}','CrudController@ad_update')->name('ad.update');
    });


    //# offerContent Route
    Route::get('offercontent/create','AdminController@offercontent_create')->middleware('AdminAndSardabir');
    Route::get('offercontent/index','AdminController@offercontent_index');
    Route::post('/offercontent_insert','CrudController@offercontent_insert')->name('offercontent.insert')->middleware('AdminAndSardabir');
    Route::get('offercontent/delete/{id}','AdminController@offercontent_Destroy')->name('offercontent.delete');
    Route::get('/offercontent/edit/{id}','AdminController@offercontent_edit')->name('offercontent.edit');
    Route::post('/offercontent/update/{id}','CrudController@offercontent_update')->name('offercontent.update');

    //# User Route
    Route::middleware('Admin')->group(function () {
    Route::get('/Add_user','AdminController@user_create');
    Route::post('/user_create','AdminController@Add_user')->name('user.add');
    Route::get('/user/index','AdminController@user_index');
    Route::get('/Edit_user/{id}','AdminController@user_edit')->name('user.edit');
    Route::post('/user/update/{id}','AdminController@user_update')->name('user.update');
    Route::get('user/delete/{id}','AdminController@user_delete')->name('user.delete');
    });
    //# User Profile Route
    Route::get('user/profile','AdminController@profile_index');
    Route::post('/profile','AdminController@profile_update')->name('profile.update');




});



################################################################
//  Comment //
################################################################ 
Route::post('/comment_add','CrudController@commentAdd')->name('comment.add');
Route::post('/reply_add','CrudController@replyAdd')->name('reply.add');



################################################################
// Front Route //
################################################################ 

Route::get('/','FrontController@home_index');
Route::get('/article/{slug}','FrontController@article_index');
Route::get('/refereshcapcha','FrontController@refreshcapcha')->name('refresh');

Route::get('/category/{slug}','FrontController@category_index')->name('category.index');
Route::get('/category/subcategory/{slug}','FrontController@subcategory');
Route::get('/imagecat','FrontController@imagecat_index')->name('imagecat.index');
Route::get('/singleimagecat/{slug}','FrontController@singleimagecat')->name('singleimage.show');

Route::get('/videocat','FrontController@videocat_index')->name('videocat.index');
Route::get('/media/videocat/{slug}','FrontController@singlevideo')->name('singlevideo');
// # Search # //
Route::get('/search','FrontController@search_index');
Route::post('/post_search' , 'FrontController@searchposts')->name('search_post');
Route::get('/search/photo','FrontController@searchPhoto_index');


// # Image # //
Route::get('/imageview/{slug}','FrontController@image_index');

// # Tag # //

Route::get('/tag/{id}','FrontController@tag_index');


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','HomeController@logout');

// Download Route
Route::get('videodownload/VideoGallary/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = public_path() .'/VideoGallary/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
})
->where('filename', '[A-Za-z0-9\-\_\.]+');


