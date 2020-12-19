<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Image;
use App\Video;
use App\Setting;
use App\Category;
use App\Subcategory;
use App\Offercontent;
use App\Advertisement;
use function Psy\debug;
use Illuminate\Http\Request;

use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\Environment\Console;

class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function dashboard(){
    return view('backend.dashboard');
   }

   ########################################<<<<<<<<<<<<<<<<<<< Users >>>>>>>>>>>>>>>>>>> ######################
   public function user_create(){
      return view('backend.users.create_user');
   }

   public function Add_user(Request $request){

      $this->validate($request, [
         'name' => 'required|max:255',
         'email' => 'required',
         'password' => 'required',
         'rule' => 'required',

     ]);
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->status = $request->status;
      $user->rule = $request->rule;
      $user->save();

      Session::flash('message',' کاربر با موفقیت اضافه شد ');
      return redirect()->back();

   }

   public function user_index(){

      $users = User::where('rule','!=','ادمین')->get();
      return view('backend.users.user_index',compact('users'));
   }

   public function user_edit($id){

      $user = User::where('id',$id)->first();
      return view('backend.users.edit_user',compact('user'));

   }

   public function user_update($id,Request $request){

   $user = User::where('id',$id)->first();
   $user->name = $request->name;
   $user->email = $request->email;
   $user->password = Hash::make($request->password);
   $user->status = $request->status;
   $user->rule = $request->rule;
   $user->save();

   Session::flash('message',' کاربر با موفقیت به روزرسانی شد ');
   return redirect()->back();

   }
   public function user_delete($id){

      User::where('id',$id)->delete();
      return redirect()->back();

   }

   public function profile_index(){
      return view('backend.users.user_profile');
   }

   public function profile_update(Request $request)
   {
      $this->validate($request, [
         'avatar' => 'required',
       

     ]);
      if($request->hasfile('avatar'))
      {
        $avatar = $request->avatar;
        $avatar_new_name = time() . $avatar->getClientOriginalName();
        $avatar->move('avatar',$avatar_new_name);
        $user = Auth::user();
        $user->avatar = 'avatar/' . $avatar_new_name;
  
      }
      $user->save();
      return redirect()->back();
   }
   ########################################<<<<<<<<<<<<<<<<<<< Category>>>>>>>>>>>>>>>>>>> ######################
   public function category_index(){
       $categories = Category::orderby('id','desc')->get();
       return view('backend.category.index',compact('categories'));
   }

   public function category_edit($id){
      $singledata = DB::table('categories')->where('id',$id)->first();
      $categories = Category::orderby('id','desc')->get();

      if($singledata == Null ){
         return redirect('/admin/viewcategory');   
      }      
      return view('backend.category.editcategory',compact('categories','singledata'));
       }

      public function Categorydelete($id){
         $category = Category::find($id)->delete();
         return redirect()->back();
      }

   ########################################<<<<<<<<<<<<<<<<<<< Subcategory>>>>>>>>>>>>>>>>>>> ######################

      public function subcategory_index($id){
         $category = Category::findOrfail($id);
      
         $categories = Category::where('status','فعال')->get();
         return view('backend.subcategory.index',compact('category','categories',));
      }

      public function subcategory_edit($id,$category_id){
         $category = Category::findOrfail($category_id);
         $singledata = Subcategory::with('categories')->find($id);
         $selected_cat = $singledata->categories->pluck('title');
         $subcategories = Subcategory::orderby('id','desc')->get();
         $categories = Category::where('status','فعال')->get();


         if($singledata == Null ){
            return redirect('/admin/viewcategory');   
         }     
    
        
       
         return view('backend.subcategory.editsubcategory',compact('subcategories','singledata',
         'categories','selected_cat','category'));
          }

          public function subshow(){
            
            $subcategories = Subcategory::with('categories')->get();
          
            return view('backend.subcategory.subshow',compact('subcategories'));
          }

          public function subcategory_Detach($id,$catid){
            $subcategory = Subcategory::where('id',$id)->first();
            $subcategory->categories()->Detach($catid);
             return redirect('/admin/viewcategory');
          }

          public function subshow_Delete($id){
             Subcategory::where('id',$id)->delete();
             return redirect()->back();
          }

          public function subshow_edit($id,$category_id){
            $category = Category::findOrfail($category_id);
            $singledata = Subcategory::with('categories')->find($id);
            $selected_cat = $singledata->categories->pluck('title');
            $subcategories = Subcategory::orderby('id','desc')->get();
            $categories = Category::where('status','فعال')->get();
   
   
            if($singledata == Null ){
               return redirect('/admin/viewcategory');   
            }     
       
           
          
            return view('backend.subcategory.shubshow_edit',compact('subcategories','singledata',
            'categories','selected_cat','category'));
          }

         ########################################<<<<<<<<<<<<<<<<<<< Tags >>>>>>>>>>>>>>>>>>> ######################

         public function tag_index(){
            $tags = Tag::get();
            return view('backend.tags.index',compact('tags'));
         }

         public function tag_edit($id){
            $tag = Tag::where('id',$id)->first();
            return view('backend.tags.edit_tag',compact('tag'));
         }

         public function delete_tag($id)
         {
               Tag::where('id',$id)->delete();
               return redirect()->back();
         }
         public function tag_update($id,Request $request){

            $tag = Tag::where('id',$id)->first();
            $tag->name = $request->name;
            $tag->save();
            Session::flash('message',' تگ با موفقیت ذخیره شد ');
            return redirect()->back();
      }
         ########################################<<<<<<<<<<<<<<<<<<< Posts>>>>>>>>>>>>>>>>>>> ######################

         public function post_index(){
           $posts = Post::with('categories')->orderby('id','DESC')->get();
           $published = DB::table('posts')->where('status','فعال')->count();
           $allposts = DB::table('posts')->count();
           return view('backend.article.index',compact('posts','published','allposts'));
         }

         public function post_create(){
            $tags = Tag::get();
            $categories = Category::where('status','فعال')->whereNotin('title',['عکس','فیلم','صفحه اصلی'])->with('subcategories')->get();
            return view('backend.article.post_create',compact('categories','tags'));
         }

         public function post_edit($id){
            $categories = Category::where('status','فعال')->whereNotin('title',['عکس','فیلم','صفحه اصلی'])->with('subcategories')->get();
            $tags = Tag::get();
            $post = Post::with('tags','categories','subcategories')->where('id',$id)->first();
            $selected_cat = $post->categories->pluck('title');
            $selected_subcat = $post->subcategories->pluck('title');
            $selected_tag = $post->tags->pluck('name');

            // dd($tags->pluck('name'),$selected_tag);
            return view('backend.article.editpost',compact('post','categories','selected_cat',
            'selected_subcat','selected_tag','tags'));
         }

         public function post_delete($id){

               Post::where('id',$id)->delete();
               return redirect()->back();
         }


         ########################################<<<<<<<<<<<<<<<<<<< offerContents >>>>>>>>>>>>>>>>>>> ######################


         public function offercontent_create()
         {
            return view('backend.offercontents.create');
         }

         public function offercontent_edit($id)
         {
            $content = Offercontent::where('id',$id)->first();
            return view('backend.offercontents.edit',compact('content'));
         }

         public function offercontent_index(){
            $content = Offercontent::orderby('id','DESC')->get();
            return view('backend.offercontents.index',compact('content'));
         }

         public function offercontent_Destroy($id)
         {

            Offercontent::where('id',$id)->delete();
            return redirect()->back();
         }

         ########################################<<<<<<<<<<<<<<<<<<< Setting>>>>>>>>>>>>>>>>>>> ######################
         public function setting(){
            $data = Setting::orderby('id','desc')->first();
            if($data){
          $data->social = explode(',',$data->social);
            }
            return view('backend.setting',compact('data'));
         }



         
            
  
     ########################################<<<<<<<<<<<<<<<<<<< Gallary>>>>>>>>>>>>>>>>>>> ######################

   public function gallary_create(){
      $imagecategory_id = 13;
      $category = Category::where('id',$imagecategory_id)->first();
      $imagecategory = $category->subcategories()->get();
      
      return view('backend.media.add_image',compact('imagecategory'));
   }
   public function gallary_index(){
      $images = Image::whereNull('parent_id')->get();
      return view('backend.media.imagegallary_index',compact('images'));
   }
   public function gallary_show($id){
      $post = Image::with('subcategories')->where('id',$id)->first();

      $imagecategory_id = 13;
      $category = Category::where('id',$imagecategory_id)->first();
      $imagecategory = $category->subcategories()->get();

      $selected_cat = $post->subcategories->pluck('title');
      return view('backend.media.gallary_show',compact('post','imagecategory','selected_cat'));
   }

   public function delete_image($id){
      Image::where('id',$id)->delete();
      Session::flash('message',' حذف شد');
      return redirect()->back();
   }
   public function delete_gallary($id){
      $gallary =  Image::where('id',$id)->first();
       if($gallary->images){
          foreach($gallary->images as $img){
             $img->delete();
          }
       }
       $gallary->delete();
       Session::flash('message',' حذف شد');
       return redirect()->back();
    }


         ########################################<<<<<<<<<<<<<<<<<<< Video>>>>>>>>>>>>>>>>>>> ######################
    public function video_create(){
      $videocategory_id = 14;
      $category = Category::where('id',$videocategory_id)->first();
      $subcategories = $category->subcategories()->get();
   

     
      return view('backend.videofolder.create',compact('subcategories'));
    }

    public function video_index(){
       $videos = Video::get();
       return view('backend.videofolder.index',compact('videos'));
    }

    public function video_delete($id){
      Video::where('id',$id)->delete();
      return redirect()->back();
    }

    public function video_edit($id){

        $video = Video::where('id',$id)->first();
        $videocategory_id = 14;
        $category = Category::where('id',$videocategory_id)->first();
        $subcategories = $category->subcategories()->get();

        $selected_cat = $video->subcategories->pluck('title');

        
         return view('backend.videofolder.editvideo',compact('video','category','selected_cat','subcategories'));
      
    }
          ########################################<<<<<<<<<<<<<<<<<<< Ad >>>>>>>>>>>>>>>>>>> ######################

   public function ad_create(){
      return view('backend.ad.create_ad');
   }

   public function ad_index(){
      $ads = Advertisement::get();
      return view('backend.ad.index',compact('ads'));
   }

   public function ad_edit($id){
      $ad = Advertisement::where('id',$id)->first();
      return view('backend.ad.edit_ad',compact('ad'));
   }

   public function ad_delete($id){
      Advertisement::where('id',$id)->delete();
      Session::flash('message','حذف شد');
      return redirect()->back();
   }


}
