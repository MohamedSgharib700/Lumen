<?php

namespace App\Http\Controllers;

use App\Country;
use App\Item;
use App\Clients;

use App\ShipmentProduct;
use App\User;
use App\Weights;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use App\CatsP;
use App\Product;
use App\Portfolio;
use App\Slider;
use App\Main;
use App\Block;
use App\Galary;
use App\Order;
use Session;
use App\Faqs;
use App\Blog;
use App\BlogCat;
use App\Section;
use App\Add;
use App;
/**
 * Description of siteController
 *
 * @author aya ahmed
 */
use App\Http\Controllers\Controller;

class siteController extends Controller {

    public function __construct() {
        App::setLocale(Session::get('local'));
    }

    public function index() {
        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP= CatsP::all();

        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        return view('site.index', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs'));
    }

    public function home() {
        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();
        $adds = Add::all();
        $cats = Category::all();
        $catsP= CatsP::all();
        //$catsP= CatsP::all();
        $faqs = Faqs::all();

        $homecats = Category::select(array('id', 'name', 'custom_url', 'photo'))->where('home', 1)->get()->take(3);
        $certifs = App\Certificate::all()->take(8);
        $testmonials = App\Testmonials::all()->take(3);
        $clients = \App\Clients::all()->take(14);
        $news = App\News::all()->take(4);
        $recent_blogs = Blog::select('title', 'ar_title', 'ar_photo_alt', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_viewed = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('last_view', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);

        return view('site.home', compact('main', 'team', 'news', 'testmonials', 'certifs', 'recent_new', 'homecats', 'faqs', 'photo', 'slider', 'blocks', 'recent_viewed', 'cats', 'popular', 'recent_blogs', 'recent_products', 'adds'));
    }

    public function Certificates() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP= CatsP::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);
        $certificates = App\Certificate::paginate(3);
        return view('site.certificates', compact('main', 'cats', 'recent_blogs', 'recent_products', 'certificates'));
    }
    
     public function MainCat($id) {// Ctaegory page

        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP= CatsP::all();

        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        $spec_cat = App\Category::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
  if (empty($spec_cat)) {
         abort(404);
         }
        return view('site.maincategory', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_cat'));
    }

    public function Clients() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP= CatsP::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);
        $clients = App\Clients::paginate(3);
        return view('site.team', compact('main', 'cats', 'recent_blogs', 'recent_products', 'team'));
    }




    public function Product($id) {
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $main = Main::find(1);
        $blocks = Block::all();
        $product = Product::Where('custom_url', '=', $id)->first();
        $cats = Category::all();
        //$catsP= CatsP::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_viewed = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('last_view', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);

        if (!empty($product)) {
            $product->viewers += 1;
            $product->last_view = date('Y-m-d h:m:s');
            $product->save();
            $meta = array('meta_description' => $product->meta_description, 'meta_keyword' => $product->meta_keyword, 'meta_auther' => $product->meta_auther);
            return view('site.product', compact('main', 'product', 'cats', 'recent_viewed', 'popular', 'meta', 'blocks', 'recent_blogs', 'recent_viewed', 'recent_products'));
        } else {
abort(404);        }
    }

    public function CatS($c,$id) {// Ctaegory page

        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP= CatsP::all();

        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        $spec_cat = App\SubCat::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
         if (empty($spec_cat)) {
         abort(404);
         }
        $meta = array('meta_description' => $spec_cat->meta_description, 'meta_keyword' => $spec_cat->meta_keyword, 'meta_title' => $spec_cat->meta_title, 
        'page_title' => $spec_cat->page_title,'ar_page_title' => $spec_cat->ar_page_title);

        return view('site.category', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_cat','meta'));
    }

    public function CatP($c,$id) {// Ctaegory page

        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        //$catsP = CatsP::all();
        $cats =Category::all();

        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        $spec_cat = App\SubCat::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
         if (empty($spec_cat)) {
         abort(404);
         }
        $meta = array('meta_description' => $spec_cat->meta_description, 'meta_keyword' => $spec_cat->meta_keyword, 'meta_title' => $spec_cat->meta_title, 
        'page_title' => $spec_cat->page_title,'ar_page_title' => $spec_cat->ar_page_title);

        return view('site.category', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_cat','meta'));
    }




    public function project($id) {
        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP = CatsP::all();
        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $spec_proj = App\Project::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
        if (empty($spec_proj)) {
         abort(404);
         }
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);
        $related_pro = App\Project::where('sub_cat_id','=',$spec_proj->sub_cat->id)->orderBy('created_at', 'desc')->get()->take(3);
        $meta = array('meta_description' => $spec_proj->meta_description, 'meta_keyword' => $spec_proj->meta_keyword, 'meta_title' => $spec_proj->meta_title, 
        'page_title' => $spec_proj->page_title,'ar_page_title' => $spec_proj->ar_page_title);
        return view('site.project', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_proj','related_pro','meta'));
    }

    public function portfolio($id) {
        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP = CatsP::all();
        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);
        $spec_proj = App\Portfolio::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
          if (empty($spec_proj)) {
         abort(404);
         }
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);
        $related_pro = App\Portfolio::where('sub_cat_id','=',$spec_proj->sub_cat->id)->orderBy('created_at', 'desc')->get()->take(3);
        $meta = array('meta_description' => $spec_proj->meta_description, 'meta_keyword' => $spec_proj->meta_keyword, 'title' => $spec_proj->meta_title, 'meta_title' => $spec_proj->meta_title, 'page_title' => $spec_proj->page_title,'ar_page_title' => $spec_proj->ar_page_title);
        return view('site.portfolio', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_proj','related_pro','meta'));
    }
    public function Projects() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $slider = Slider::where('status', 1)->get();
        $projects= Portfolio::all();
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        return view('site.projects', compact('main', 'cats', 'recent_blogs', 'recent_products', 'procats','slider','projects'));
    }

    public function Blogs() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $slider = Slider::where('status', 1)->get();
        $blogs= App\Blog::paginate(4);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        return view('site.blogs', compact('main', 'cats', 'recent_blogs', 'recent_products', 'procats','slider','blogs'));
    }


    public function Careers() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $slider = Slider::where('status', 1)->get();
        $projects= App\Project::all();
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);
        $careers=App\Careers::all();
        return view('site.careers', compact('main', 'cats', 'recent_blogs', 'recent_products', 'procats','slider','projects','careers'));
    }



    public function Colorize() {
       //$popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
       $slider = Slider::where('status', 1)->get();
       $colors= \App\Color::all();
       $colorcats= \App\ColorCat::all();

        return view('site.colorize', compact('main', 'cats' , 'colors','slider','colorcats'));
    }

    public function blogcat($id) {
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $main = Main::find(1);
        $cats = Category::all(array('id', 'name', 'custom_url'));
        //$catsP = CatsP::all();
        $blogs = Blog::where('blog_cat_id', $id)->orderBy('created_at', 'desc')->paginate(6);
        $blogcats = BlogCat::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $blocks = Block::all();
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);

        return view('site.blogs', compact('main', 'recent_products', 'cats', 'popular', 'blogs', 'blogcats', 'recent_blogs', 'blocks'));
    }

    public function blog($id) {
        $main = Main::find(1);

        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP = CatsP::all();

        $recent_projects = App\Project::orderBy('created_at', 'desc')->get()->take(3);

        $spec_blog = App\Blog::Where('custom_url', '=', $id )->orwhere('ar_custom_url', '=', $id )->first();
        $related_blogs = App\Blog::where('sub_cat_id','=',$spec_blog->sub_cat->id)->orderBy('created_at', 'desc')->get()->take(3);
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);
        $meta = array('meta_description' => $spec_blog->meta_description, 'meta_keyword' => $spec_blog->meta_keyword, 'meta_title' => $spec_blog->meta_title,
         'page_title' => $spec_blog->page_title,'ar_page_title' => $spec_blog->ar_page_title
        );
        return view('site.blog', compact('main', 'slider', 'cats', 'recent_projects','recent_blogs','spec_blog','related_blogs','meta'));
    }

    public function faqs() {
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $main = Main::find(1);
        $cats = Category::all(array('id', 'name', 'custom_url'));
        //$catsP = CatsP::all();
        $faqs = Faqs::all();
        return view('site.faqs', compact('cats','main', 'faqs', 'popular'));
    }

    public function Block($id) {
        $main = Main::find(1);
        if (Session::get('local') == 'ar') {
            $recent_viewed = Product::select('ar_name', 'id', 'photo', 'ar_photo_alt', 'price', 'ar_custom_url')->orderBy('last_view', 'desc')->get()->take(3);
            $popular = Product::select('id', 'ar_name', 'photo', 'price', 'ar_photo_alt', 'ar_custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        } else {
            $recent_viewed = Product::select('name', 'id', 'photo', 'photo_alt', 'price', 'custom_url')->orderBy('last_view', 'desc')->get()->take(3);
            $popular = Product::select('id', 'name', 'photo', 'price', 'photo_alt', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        }
        $cats = Category::all(array('id', 'name', 'ar_name'));
        //$catsP = CatsP::all();
        $block = Block::find($id);
        if (empty($block)) {
            return view('site.notfound', compact('main', 'recent_new', 'cats'));
        }
        if (Session::get('local') == 'ar') {
            $meta = array('meta_description' => $block->ar_meta_description, 'meta_keyword' => $block->ar_meta_keyword, 'meta_auther' => $block->ar_meta_auther);
        } else {
            $meta = array('meta_description' => $block->meta_description, 'meta_keyword' => $block->meta_keyword, 'meta_auther' => $block->meta_auther);
        }
        return view('site.block', compact('main', 'meta', 'block', 'cats', 'recent_viewed', 'popular'));
    }

    public function aboutus() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);
        $clients=App\Client::all();
        $team=App\Team::all();
        return view('site.aboutus', compact('main', 'cats', 'recent_blogs','clients','team'));

    }

    function search(Request $data) {
        $main = Main::find(1);
//  $recent_new = Blog::select('id', 'title', 'photo', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);


        $slider = Slider::where('status', 1)->get();

        $cats = Category::all();
        //$catsP = CatsP::all();

        if ( !empty($data['keyword'])) {
            $products = Product::where('name', 'like', '%' . $data['keyword'] . '%')->orWhere('ar_name', 'like', '%' . $data['keyword'] . '%')->paginate(5);
        } else {
            $products = null;
        }
// dd($products);
        return view('site.searchresult', compact('main', 'products', 'slider','cats'));
    }

    public function rules() {
        $main = Main::find(1);
        $cats = Category::all(array('id', 'name', 'ar_name'));
        //$catsP = CatsP::all();
        return view('site.rules', compact('main', 'cats'));
    }

    public function getcart() {

        $main = Main::find(1);
        $slider = Slider::where('status', 1)->get();
        $cats = Category::all();
        //$catsP = CatsP::all();
        $card = $_SESSION['cart'];

       

        return view('site.cart', compact('main', 'slider', 'blocks', 'cats', 'card'));
    }

    public function checkout() {
        if (Auth::check()) {
            $card = $_SESSION['cart'];
            if (count($card) < 1) {
                return Redirect::to('Cart');
            }
            $main = Main::find(1);
            $cats = Category::all(array('id', 'name', 'ar_name'));
            //$catsP = CatsP::all();
            return view('site.checkout', compact('cats', 'main', 'card'));
        } else {
            return Redirect::to('Cart');
        }
    }

    public function profile() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        return view('profile.me', compact('main', 'cats'));
    }

    public function myorder() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        if (Auth::check()) {
            $orders = Order::where('user_id', '=', Auth::user()->id)->get();
        }
        return view('profile.myorder', compact('main', 'cats', 'orders'));
    }

    public function order($id) {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $order = Order::find($id);
        return view('profile.order', compact('main','catsP', 'order'));
    }

    public function mywishlist() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $blocks = Block::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_viewed = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('last_view', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);

        return view('site.profile.wlist', compact('cats', 'main', 'blocks', 'popular', 'recent_viewd', 'recent_blogs', 'recent_products'));
    }

    public function contactus() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $recent_blogs = App\Blog::orderBy('created_at', 'desc')->get()->take(2);

        return view('site.contactus', compact('main', 'cats', 'recent_blogs'));
    }

    public function parts() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        return view('site.parts', compact('main', 'cats'));
    }

    public function getcolors($item_id) {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $items = Item::find($item_id);
        Return \Illuminate\Support\Facades\Response::json($items);
    }

    public function sortedby(Request $sorted_by) {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
        $products = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy($sorted_by['sorted_by'], 'desc')->paginate(6);
        $slider = Slider::where('status', 1)->get();
        $adds = Add::all();
        $homecats = Category::select(array('id', 'name', 'custom_url', 'photo'))->where('home', 1)->get()->take(3);
        $blocks = Block::all();
        $recent_blogs = Blog::select('title', 'id', 'desc', 'photo', 'photo_alt', 'custom_url', 'created_at')->orderBy('created_at', 'desc')->get()->take(3);
        $recent_viewed = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('last_view', 'desc')->get()->take(3);
        $recent_products = Product::select('name', 'id', 'photo', 'price', 'custom_url')->orderBy('created_at', 'desc')->get()->take(3);
        $popular = Product::select('id', 'name', 'photo', 'price', 'custom_url')->orderBy('viewers', 'desc')->get()->take(3);
        $sections = Section::all(array('id', 'name'));


        return view('site.sortedby', compact('main', 'products', 'cats', 'recent_viewed', 'popular', 'sections', 'homecats'));
    }

    public function getlogin() {
        $main = Main::find(1);
        $cats = Category::all(array('id', 'name', 'custom_url'));
        //$catsP = CatsP::all();
     
        return view('site.login', compact('main', 'cats'));
    }

    public function getregister() {
        $main = Main::find(1);
        $cats = Category::all();
        //$catsP = CatsP::all();
       
        return view('site.register', compact('main',  'cats'));
    }

}
