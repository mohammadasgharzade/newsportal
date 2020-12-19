<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\User;
use App\Image;
use App\Video;
use Thumbnail;
use App\Comment;
use App\Setting;
use App\Category;
use Carbon\Carbon;
use App\Subcategory;
use App\Offercontent;
use App\Advertisement;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Mews\Captcha\Facades\Captcha;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Pawlox\VideoThumbnail\Facade\VideoThumbnail;

class FrontController extends Controller
{
    public function __construct(){
        $categories = Category::with('subcategories')->where('status','فعال')->whereNotIn('id',[1])->take(14)->get();
        $allcategory = Category::with('subcategories')->where('status','فعال')->whereNotIn('id',[1,2,13,14])->get();

        // $subcategories = Category::where('status','فعال')->whereNotIn('title',['صفحه ی اصلی'])->get();
        $today =  Jalalian::forge('today')->format('%A, %d %B %Y') .'      ' . Jalalian::forge('now')->Format('H:i');
         $setting = Setting::first();
         if($setting){
            $setting->social = explode(',',$setting->social);
                foreach($setting->social as $social){
                    if($social != '')
                    {
                        // میاد با . قسمت اول لینک رو جدا میکنه 
                        //icon[0] = https:;
                        //icon[1] = google;
                        //icon[2] = .com;
                    $icon = explode('|',$social);
                       
                            $url = $icon[1];
                     
                            $icon = $icon[0];
                        
                   

                    $icons[] = $icon;
                    $urls[] = $url;
                    }

                    // dd($urls);
                }
              
              }else{
                  $icons =[];
                  $urls[] = [];
              }

             $leaderboard = Advertisement::where('status','فعال')->where('location','leaderboard')->orderby('id','DESC')->first();
             $sidebar_top = Advertisement::where('status','فعال')->where('location','sidebar_top')->orderby('id','DESC')->get();
             $sidebar_bottom = Advertisement::where('status','فعال')->where('location','sidebar_bottom')->orderby('id','DESC')->first();
         
              
            $most_view = Post::where('status','فعال')->orderby('view','DESC')->get();
            $most_comment = Post::where('status','فعال')->orderby('comment_count','DESC')->get();
            $bargozide_id = 20;
            $bargozideha = Category::where('status','فعال')->where('id',$bargozide_id)->first();
            $gallary_most_view = Image::where('status','فعال')->whereNull('parent_id')->orderby('view','DESC')->get();
             view()->share([
            'categories' => $categories,
            'allcategory' => $allcategory,
            'setting' => $setting,
            'today' => $today,
            'icons' => $icons,
            'urls' => $urls,
            'leaderboard' => $leaderboard,
            'sidebar_bottom' => $sidebar_bottom,
            'sidebar_top' => $sidebar_top,
            'most_view' => $most_view,
            'most_comment' => $most_comment,
            'bargozideha' => $bargozideha,
            'gallary_most_view' => $gallary_most_view,
        ]);
    }

    public function home_index(){

    $users = User::get();
     //## اخبار ویژه ##
   
     $featured =  Category::with('posts')->where('status','فعال')->where('id','like','%1%')->first();

     //## سایر اخبار مهم ##
     $cat = DB::table('category_post')->whereNotIn('category_id',[1])->pluck('post_id');
     $result[]=$cat[2];
     foreach($cat as $post_id)
     {

        if(in_array($post_id,$result) == false)
        {
            $result[] = $post_id;

        }

    }
    // dd($result);
    foreach($result as $post_id){

        $general[] =Post::where('id',$post_id)->first();

    }
    // dd($general);      
    // $general = $general->flatten();
    //  $general = $object->map(function($query){
    //    $post = Post::where('id',$query)->get();
         
    //  return $post;
    //  });
    //  $general = $object->flatten();
   


    //## استان ها ##
    $provinces =  Category::with('posts')->where('id','like','%12%')->first();

    //##  ورزش ##
    $sports =  Category::with('posts')->where('id','like','%10%')->first();

    
    //##  بین الملل ##
    $international =  Category::with('posts')->where('id','like','%5%')->first();

        
    //##  خبر خوب  ##
    $goodnews =  Category::with('posts')->where('id','like','%16%')->first();
    
    //##  فارس من   ##
    $farsman =  Category::with('posts')->where('id','like','%17%')->first();
  
    //##  دیگر استانها   ##
    $other_provinces =  Category::with('posts')->where('id','like','%18%')->first();

    //##  عکس    ##
    $gallary = Image::where('status','فعال')->whereNull('parent_id')->orderby('id','DESC')->get();

    //##   ویدیو  ##
    $videos = Video::where('status','فعال')->orderby('id','DESC')->get();

    //##   عکس فارس من    ##
    $farsmanImage = Image::where('status','فعال')->whereNull('parent_id')->orderby('id','DESC')->get();

    //##  یادداشت ها  ##
    $note =  Category::with('posts')->where('id','like','%21%')->first();

      
    return view('frontend.index',compact('featured','general','provinces','sports',
    'international','goodnews','farsman','other_provinces','gallary','farsmanImage','note','users','videos'));

    }


    public function article_index($slug){
        $post = Post::where('slug',$slug)->first();
        $post->increment('view');
        $allcomments =  DB::table('comments')->where('post_id',$post->id)->count();
        $post->comment_count = $allcomments;
        $post->save();
        //Pivot Category_id of Posts
        foreach ($post->categories as $item) {
            $postCat = $item->pivot->category_id;
           
        }
        //Tags
        $tags = $post->tags();

        //OfferContent
       $content = Offercontent::orderby('id','DESC')->get();
       $related = Category::where('id','LIKE','%'. $postCat .'%')->first();
            

       //کسب و کار
       $business = Category::with('posts')->where('id','like','%22%')->first();
    //    dd($postCat,$related);
        // dd($cat,$result);

        // dd($post->categories[0]->id);   

        $comments =  Comment::with('replies')->orderby('id','DESC')->get();
        

    return view('frontend.articlefolder.article',compact('post','related','content','business'
    ,'comments','allcomments'));
    }

    public function refreshcapcha(){
        return Captcha::img('math');
        
    }
     public function category_index($slug){
      
      $category = Category::where('slug',$slug)->first();
      //کسب و کار
      $business = Category::with('posts')->where('id','like','%19%')->first();
      $pagination = $category->posts()->paginate(8);
      return view('frontend.categoryfolder.category',compact('category','business','pagination'));

    }

     public function subcategory($slug){
      
      $subcategory = Subcategory::where('slug',$slug)->first();
      //کسب و کار
      $business = Category::with('posts')->where('id','like','%19%')->first();
      $pagination = $subcategory->posts()->paginate(8);
      return view('frontend.categoryfolder.subcategory',compact('subcategory','business','pagination'));

    }
    ################################################## Imagecat ########################################

    public function imagecat_index(){
      
        $gallary = Image::with('subcategories')->orderby('id','DESC')->where('status','فعال')->whereNull('parent_id')->get();
        // dd($gallary);

        $imagecategory_id = 13;
        $category = Category::with('subcategories')->where('id',$imagecategory_id)->first();
        //کسب و کار
        return view('frontend.categoryfolder.imagecat_index',compact('gallary','category'));
  
      }

      public function singleimagecat($slug){

          $singlecat = Subcategory::with('images')->where('slug',$slug)->first();
          $imagecategory_id = 13;
          $category = Category::with('subcategories')->where('id',$imagecategory_id)->first();
          return view('frontend.imagefolder.singleimagecat',compact('singlecat','category'));

      }

   ################################################## Videocat ########################################

   public function videocat_index(){
      
    $videos = Video::orderby('id','DESC')->where('status','فعال')->get();
 
    // dd($videos);

    return view('frontend.videofolder.videocat',compact('videos'));

  }

  public function singlevideo($slug){

    $singlevideo = Video::where('slug',$slug)->first();

    // dd($singlevideo->video);
    $lastvideos = Video::orderby('id','DESC')->where('status','فعال')->take(10)->get();
    //Pivot Category_id of Posts
    if(count($singlevideo->subcategories)>0){

        foreach ($singlevideo->subcategories as $item) {
       $postsubCat = $item->pivot->subcategory_id;
         }
   }
   else{
       $postsubCat = '';
   }
    $related = Subcategory::where('id','LIKE','%'. $postsubCat .'%')->first();
    return view('frontend.videofolder.singlevideo',compact('singlevideo','lastvideos','related'));

  }

    ################################################## Search ########################################
    public function search_index(Request $request){
       $searchinfo = $request->q;
       $posts = Post::where('title','like','%' . $searchinfo . '%')->take(10)->get();
// dd($posts);
        return view('frontend.search',compact('searchinfo','posts'));
    }


    public function searchposts(Request $request){

        $posts = Post::where('title','like','%' . $request->get('searchQuesr') . '%')->take(10)->get();
        return json_encode($posts);

    }



    public function searchPhoto_index(Request $request){
        $searchinfo = $request->q;
        $gallary = Image::whereNull('parent_id')->where('title','like','%' . $searchinfo . '%')->take(10)->get();
         return view('frontend.searchphoto',compact('searchinfo','gallary'));
    }
    ################################################## Image ########################################
    public function image_index($slug){
        $single_gallary = Image::where('slug',$slug)->whereNull('parent_id')->first();
     
        $single_gallary->increment('view');
        $gallary = Image::where('slug',$slug)->first();
        
        $peg = $gallary->images()->paginate(20);
        return view('frontend.imagefolder.image',compact('gallary','peg'));
    }



    
    ################################################## Tag ########################################

    public function tag_index($id){

        $tag = Tag::with('posts')->where('id',$id)->first();
        $tagcount = $tag->posts()->count();
        // dd($tag);
        return view('frontend.tagfolder.index',compact('tag','tagcount'));

    }



}