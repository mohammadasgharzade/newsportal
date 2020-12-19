<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Image;
use App\Video;
use App\Comment;
use App\Setting;
use App\Category;
use App\Subcategory;
use App\Offercontent;
use App\Advertisement;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use PharIo\Manifest\RequiresElement;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use Pawlox\VideoThumbnail\Facade\VideoThumbnail;

class CrudController extends Controller
{
    ############################################<<<<<<<<<<<<<<<<<<<<<<<< Category Insert Data >>>>>>>>>>>>>>>>>#####################################
    public function category_insert(Request $request){
      $this->validate($request, [
        'title' => 'required|unique:categories|max:255',
        'status' => 'required',
    ]);
      $category = new Category();
      $category->title = $request->title;
      $category->slug = $request->slug;
      $category->status  = $request->status;
    
      $category->save();
 
      Session::flash('message','مجموعه با موفقیت ذخیره شد');
      return redirect()->back();
    }



    ############################################<<<<<<<<<<<<<<<<<<<<<<<< Category Update Data >>>>>>>>>>>>>>>>>#####################################
    
    public function updateData($id,Request $request){

      $this->validate($request, [
        'title' => 'required|max:255',
        'status' => 'required',
    ]);
        $category = Category::where('id',$id)->first();
        $category->title = $request->title;
        $category->status  = $request->status;
        $category->save();

         Session::flash('message','مجموعه با موفقیت به روز رسانی شد ');
        return redirect()->back();
       
    }

     ############################################<<<<<<<<<<<<<<<<<<<<<<<< Subcategory Insert Data >>>>>>>>>>>>>>>>>#####################################
     public function subcategory_insert(Request $request){
      $this->validate($request, [
        'title' => 'required|unique:subcategories|max:255',
        'status' => 'required',
    ]);
      $subcategory = new Subcategory();
      $subcategory->title = $request->title;
      $subcategory->slug = $request->slug;
      $subcategory->status  = $request->status;
      $subcategory->save();

      $cats =  $request->parent_cat;
      if($cats)
      {
        foreach($cats as $cat){
        $subcategory->categories()->attach($cat);
        }

      }
      else
      {
        $subcategory->categories()->attach($request->cat_id);

      }
 
      Session::flash('message','زیر مجموعه با موفقیت ذخیره شد');
      return redirect()->back();
    }


     ############################################<<<<<<<<<<<<<<<<<<<<<<<< Subcategory Update Data >>>>>>>>>>>>>>>>>#####################################
     public function subcategory_update($id,Request $request){
      $this->validate($request, [
        'title' => 'required|max:255',
        'status' => 'required',
    ]);

      $subcategory = Subcategory::where('id',$id)->first();
      $subcategory->title = $request->title;
      $subcategory->slug = $request->slug;
      $subcategory->status  = $request->status;
      $subcategory->save();

      DB::table('category_subcategory')->where('subcategory_id',$request->subcategory_id)->delete();
      $cats = $request->parent_cat;
      if($cats){
      foreach($cats as $cat){
        $subcategory->categories()->attach($cat);
      }
      }else{
        $subcategory->categories()->attach($request->cat_id);

      }
      Session::flash('message','مجموعه با موفقیت به روز رسانی شد');
      return redirect()->back();
    }


        ############################################<<<<<<<<<<<<<<<<<<<<<<<< Setting Insert Data >>>>>>>>>>>>>>>>>#####################################
        public function setting_insert(Request $request){
            $tbl = decrypt($request->tbl);
            $model = decrypt($request->model);
            unset($request->tbl , $request->model);

            $setting = new Setting;
            $setting->about = $request->about;
    
  
            foreach($request->social as $item)
            {
              if($item != '')
              {
    
                $itm[] = $item;
              }
            }
        
              $setting->social = implode(',', $itm);
        
            if($request->hasFile('image')){
             $setting->image = $this->uploadCover($request->image,$tbl,$model);
            }

            $setting->save();
            Session::flash('message','تنظیملت با موفقیت اعمال شد');
            return redirect()->back();

        }
       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Upload Cover Method >>>>>>>>>>>>>>>>>#####################################
        public function uploadCover($filename,$location,$model){
          $name = $filename->getClientOriginalName();
          //Delete Old Cover
          $covers = $model::whereNotIn('image',[$name])->pluck('image');

          foreach($covers as $cover){
            $oldCover = public_path($location).DIRECTORY_SEPARATOR.$cover;
            if(File::exists($oldCover)) {
                File::delete($oldCover);
            }

         }
         // Move Cover to PUblic/TableName
            $filename->move(public_path().'/'.$location , date('ymdgis') . $name);
            return date('ymdgis') . $name;
        } 

       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Setting Update Data >>>>>>>>>>>>>>>>>#####################################
       public function setting_update(Request $request,$id){
        $tbl = decrypt($request->tbl);
        $model = decrypt($request->model);
        unset($request->tbl , $request->model);
        $setting = Setting::where('id',$id)->first();;
        $setting->about = $request->about;
        
        foreach($request->social as $item)
        {
          if($item != '')
          {

            $itm[] = $item;
          }
        }
    
          $setting->social = implode(',', $itm);
      
   
        if($request->hasFile('image')){
         $setting->image = $this->uploadCover($request->image,$tbl,$model);
        }

        $setting->save();
        Session::flash('message','تنظیملت با موفقیت اعمال شد');
        return redirect()->back();

    }

       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Post Insert Data >>>>>>>>>>>>>>>>>#####################################

    public function post_insert(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|max:255',
        'status' => 'required',
        'slug' => 'required',
        'descryption' => 'required',
        'image' => 'required',
        'category' => 'required',
        'meta' => 'required',
    ]);
      
      $post = new Post;
      $post->title  = $request->title;
      $post->slug = $request->slug;
      $post->descryption = $request->descryption;
      $post->status = $request->status;
      $post->meta = $request->meta;
      $post->user_id = auth()->user()->id;
      if($request->hasfile('image'))
      {
          $image_new_name = time() . $request->image->getClientOriginalName();
          $request->image->move('post_images',$image_new_name);

          $post->cover = 'post_images/' . $image_new_name;

      }
      
      $post->save();
      
      $cats = $request->category;
      if($cats)
      {
        foreach($cats as $cat){
        $post->categories()->attach($cat);
        }
      }
      $subcats = $request->submenu;
      if($subcats)
      {
        foreach($subcats as $submenu){
        $post->subcategories()->attach($submenu);
        }
      }
      

       //ذخیره تگ ها
       $tags = $request->tags;
       if($tags){
       foreach($tags as $key=>$value)
       {
           Tag::firstOrCreate(['name'=>$value])->save();  
       }
       foreach($tags as $key=>$value)
       {
           $tag_id = Tag::where('name',$value)->pluck('id');
           foreach($tag_id as $id){
           $post->tags()->attach($id);
           }

       }

      }
      Session::flash('message',' خبر با موفقیت منتشر شد ');
      return redirect()->back(); }

       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Post Update Data >>>>>>>>>>>>>>>>>#####################################

       public function post_update($id,Request $request){

        $post = Post::with('tags')->where('id',$id)->first();
        $post->title  = $request->title;
        $post->slug = $request->slug;
        $post->descryption = $request->descryption;
        $post->status = $request->status;
        $post->meta = $request->meta;
        if($request->hasfile('image'))
        {
            $image_new_name = time() . $request->image->getClientOriginalName();
            $request->image->move('post_images',$image_new_name);
  
            $post->cover = 'post_images/' . $image_new_name;
  
        }
        
        $post->save();

        DB::table('category_post')->where('post_id',$request->post_id)->delete();
        
        $cats = $request->category;
        if($cats)
        {
          //##### to avoid of attach old category we seperate that with array_diff #####
          
          //  $cat_result = array_diff($cats,$post_cat->toArray());
          //  dd($cat_result);
          foreach($cats as $cat){
          $post->categories()->attach($cat);
          }
        }
        else{
          Session::flash('error','choose category');
          return redirect()->back(); 
        }

        DB::table('post_subcategory')->where('post_id',$request->post_id)->delete();
        $subcats = $request->submenu;
        if($subcats)
        {
          // $subcat_result = array_diff($subcats,$post_subcat->toArray());
          foreach($subcats as $submenu){
          $post->subcategories()->attach($submenu);
          }

        }
        
  
        
        //ذخیره تگ ها
        DB::table('post_tag')->where('post_id',$request->post_id)->delete();
        $tags = $request->tags;
        // dd($tags);
        if($tags)
        {

          foreach($tags as $key=>$tag)
          {
              Tag::firstOrCreate(['name'=>$tag])->save();  
          }
          // $subcat_result = array_diff($subcats,$post_subcat->toArray());
          foreach($tags as $key=>$tag)
          {

              $tag_id = Tag::where('name',$tag)->pluck('id');
              foreach($tag_id as $id){
              $post->tags()->attach($id);
              }

          }

        }
      
        Session::flash('message',' خبر با موفقیت به روز رسانی شد  ');
        return redirect()->back(); 


      }
  
       ############################################<<<<<<<<<<<<<<<<<<<<<<<<  offerContent insert Data >>>>>>>>>>>>>>>>>#####################################
        public function offercontent_insert(Request $request){
          $this->validate($request, [
            'title' => 'required|max:255',
            'status' => 'required',
            'image' => 'required',
            'url' => 'required',
           
        ]);
          $content = new Offercontent();
          $content->title = $request->title;
          $content->url = $request->url;
          $content->status = $request->status;

          if($request->hasfile('image'))
          {
              $image_new_name = time() . $request->image->getClientOriginalName();
              $request->image->move('offer_images',$image_new_name);
    
              $content->cover = 'offer_images/' . $image_new_name;
    
          }
        
          $content->save();
          Session::flash('message',' مطلب با موفقیت منتشر شد');
          return redirect()->back(); 
        }

       ############################################<<<<<<<<<<<<<<<<<<<<<<<<  offerContent Update Data >>>>>>>>>>>>>>>>>#####################################
       public function offercontent_update($id,Request $request){
     
        $content = Offercontent::where('id',$id)->first();
        $content->title = $request->title;
        $content->status = $request->status;
        $content->url  = $request->url;

        if($request->hasfile('image')){
        $image = $request->image;
        $image_new_name = time() . $image->getClientOriginalName();
        $image->move('offer_images',$image_new_name);
        $content->cover = 'offer_images/' . $image_new_name;
        }
        $content->save();

      Session::flash('message',' مطلب با موفقیت به روزرسانی  شد ');
      return redirect()->back();
    }
      

       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Gallary Insert Data >>>>>>>>>>>>>>>>>#####################################


      public function gallary_image_create(Request $request)
      {
      // dd($request->image);
        $this->validate($request, [
          'title' => 'required|max:255',
          'descryption' => 'required',
          'parent_cat' => 'required',
          
      ]);
        
      //get image category id 
      $post = new Image;
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->status = $request->status;
      $post->descryption = $request->descryption;
      $post->user = auth()->user()->name;
      $post->save();
      $post_id = $post->id;

      // dd($post_id); 
      DB::table('image_subcategory')->where('image_id',$post_id)->delete();
      $subcats = $request->parent_cat;
      if($subcats)
      {
        // $subcat_result = array_diff($subcats,$post_subcat->toArray());
        foreach($subcats as $submenu){
        $post->subcategories()->attach($submenu);
        }

      }

      if($request->image){

        $images = $request->image;
        foreach($images as $image){
          $img = new Image;
          $img->title = $post->title;
          $img->slug = $post->slug;
          $img->status = $post->status;
          $img->descryption = $post->descryption;
          $img->user = auth()->user()->name;
          $image_new_name = time() . $image->getClientOriginalName();
          $image->move('imageGallary',$image_new_name);
          $img->parent_id = $post_id;
          $img->image = 'imageGallary/' . $image_new_name;
          $img->save();
        }

      }


        //   $image_new_name = time() . $image->getClientOriginalName();
        //   $image->move('imageGallary',$image_new_name);

        //   $img[] = 'imageGallary/' . $image_new_name;
        // }
      
        // $post->image = implode('|||',$img);
        // $post->save();

        Session::flash('message',' گالری با موفقیت ذخیره شد ');

        return redirect()->back();
        
      }



      public function gallary_update($id,Request $request)
      {
          $gallary = Image::where('id',$id)->first();
          $gallary->title = $request->title;
          $gallary->slug = $request->slug;
          $gallary->status = $request->status;
          $gallary->descryption = $request->descryption;
          $gallary->user = auth()->user()->name;

        // dd($gallary->images);
          
          if($gallary->images)
          {
            foreach($gallary->images as $oldimage){
              $oldimage->title = $gallary->title;
              $oldimage->slug = $gallary->slug;
              $oldimage->status = $gallary->status;
              $oldimage->descryption = $gallary->descryption;
              $oldimage->user = auth()->user()->name;
              $oldimage->save();
            }
          }
          $gallary->save();  
          $post_id = $gallary->id;

          DB::table('image_subcategory')->where('image_id',$post_id)->delete();
          $subcats = $request->parent_cat;
          if($subcats)
          {
            // $subcat_result = array_diff($subcats,$post_subcat->toArray());
            foreach($subcats as $submenu){
            $gallary->subcategories()->attach($submenu);
            }
    
          }
        if($request->image){

          $images = $request->image;
          foreach($images as $image){
              $img = new Image;
              $img->title = $gallary->title;
              $img->slug = $gallary->slug;
              $img->status = $gallary->status;
              $img->descryption = $gallary->descryption;
              $img->user = auth()->user()->name;
              $image_new_name = time() . $image->getClientOriginalName();
              $image->move('imageGallary',$image_new_name);
              $img->parent_id = $gallary->id;
              $img->image = 'imageGallary/' . $image_new_name;
              $img->save();
            }


        //   $images = $request->image;
        //   foreach($images as $image){
        //     $image_new_name = time() . $image->getClientOriginalName();
        //     $image->move('imageGallary',$image_new_name);
        //     $img[] = 'imageGallary/' . $image_new_name;
        //   }
        //   foreach(explode('|||',$gallary->image) as $imagegallary){
        //     $img[] = $imagegallary;
        //   }

        //   $gallary->image = implode('|||',$img);

         }
          // $gallary->save();
  
          Session::flash('message',' گالری با موفقیت به روز رسانی شد ');
  
          return redirect()->back();
          }


       ############################################<<<<<<<<<<<<<<<<<<<<<<<<   Video Create >>>>>>>>>>>>>>>>>#####################################

       public function video_create(Request $request){

        $this->validate($request, [
          'title' => 'required|max:255',
          'descryption' => 'required',
          'video' => 'required',
          'image' => 'required',
      ]);

      $post = new Video;
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->status = $request->status;
      $post->descryption = $request->descryption;
      
      $video = $request->video;
      $video_new_name = time() . $video->getClientOriginalName();
      $video->move('VideoGallary',$video_new_name);
      $post->video = 'VideoGallary/' . $video_new_name;

       
      $cover = $request->image;
      $cover_new_name = time() . $cover->getClientOriginalName();
      $cover->move('Videothumbnail',$cover_new_name);
      $post->image = 'Videothumbnail/' . $cover_new_name;


      $post->save();

      $cats = $request->parent_cat;
      if($cats)
      {
        foreach($cats as $cat){
        $post->subcategories()->attach($cat);
        }
      }

        Session::flash('message',' ویدیو با موفقیت ذخیره شد ');

        return redirect()->back();
        

       }

       public function video_update($id,Request $request){
        $video = Video::where('id',$id)->first();
        // dd($request->all());

        $video->title  = $request->title;
        $video->slug = $request->slug;
        $video->descryption = $request->descryption;
        $video->status = $request->status;

        if($request->hasfile('image'))
        {
          $vid = $request->image;
          $video_new_name = time() . $vid->getClientOriginalName();
          $vid->move('VideoGallary',$video_new_name);
          $video->video = 'VideoGallary/' . $video_new_name;
    
        }
        
        if($request->hasfile('cover')){  
      $cover = $request->cover;
      $cover_new_name = time() . $cover->getClientOriginalName();
      $cover->move('Videothumbnail',$cover_new_name);
      $video->image = 'Videothumbnail/' . $cover_new_name;
        }
        $video->save();

        DB::table('subcategory_video')->where('video_id',$request->video_id)->delete();
        
        $cats = $request->parent_cat;
        if($cats)
        {
         
          foreach($cats as $cat){
          $video->subcategories()->attach($cat);
          }
        }
        else{
          Session::flash('error','choose category');
          return redirect()->back(); 
        }

        Session::flash('message',' ویدیو با موفقیت به روزرسانی شد ');
        return redirect()->back();

       }
       ############################################<<<<<<<<<<<<<<<<<<<<<<<< Ad Insert Data >>>>>>>>>>>>>>>>>#####################################

      public function ad_insert(Request $request){
        $this->validate($request, [
          'title' => 'required|max:255',
          'status' => 'required',
          'url' => 'required',
          'location' => 'required',
          'image' =>  'required',
      ]);
          $ad = new Advertisement();
          $ad->title = $request->title;
          $ad->status = $request->status;
          $ad->location = $request->location;
          $ad->url  = $request->url;

          $image = $request->image;
          $image_new_name = time() . $image->getClientOriginalName();
          $image->move('Ad_images',$image_new_name);
          $ad->image = 'Ad_images/' . $image_new_name;

          $ad->save();

        Session::flash('message',' تبلیغ با موفقیت ایجاد شد ');
        return redirect()->back();
      }

      public function ad_update($id,Request $request){
     
          $ad = Advertisement::where('id',$id)->first();
          $ad->title = $request->title;
          $ad->status = $request->status;
          $ad->location = $request->location;
          $ad->url  = $request->url;

          if($request->hasfile('image')){
          $image = $request->image;
          $image_new_name = time() . $image->getClientOriginalName();
          $image->move('Ad_images',$image_new_name);
          $ad->image = 'Ad_images/' . $image_new_name;
          }
          $ad->save();

        Session::flash('message',' تبلیغ با موفقیت به روزرسانی  شد ');
        return redirect()->back();
      }
        
 ############################################<<<<<<<<<<<<<<<<<<<<<<<<  Comment Add >>>>>>>>>>>>>>>>>#####################################



public function commentAdd(Request $request){
// dd($request->all());
  $this->validate($request, [
    'name' => 'required|max:255',
    'text' => 'required',
    'email' => 'required',
    'captcha' => ' required|captcha',
]);
  $comment = new Comment();
  $comment->name = $request->name;
  $comment->text = $request->text;
  $comment->email = $request->email;
  $comment->post_id = $request->post_id;
    $comment->save();
  Session::flash('message','پیام شما با موفقیت فرستاده شد');
  return redirect()->back();
}



public function replyAdd(Request $request){
  
// dd($request->all());

  $this->validate($request, [
    'name' => 'required|max:255',
    'text' => 'required',
    'email' => 'required',
    'captcha' => ' required|captcha',
]);
  $comment = new Comment();
  $comment->name = $request->name;
  $comment->text = $request->text;
  $comment->email = $request->email;
  $comment->parent_id = $request->parent_id;
  $comment->post_id = $request->post_id;

  $comment->save();

  Session::flash('message','پیام شما با موفقیت فرستاده شد');
  return redirect()->back();
}






















}