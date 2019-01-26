<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Rate;
use App\User;
use App\Subscribe;
use App\Product;
use App\Wlist;
use App\Message;
use App;
use App\Order;
use App\Order_details;
/**
 * Description of AdminController
 *
 * @author aya ahmed
 */
use App\Http\Controllers\Controller;

class AjaxController extends Controller {

    public function __construct() {
        App::setLocale(Session::get('local'));
    }


    public function postcontactus(Request $data) {
        //  dd($data->all());
        $validator = Validator::make($data->all(), ['name' => 'required|max:255',
                    'email' => 'required|email',
                    'message' => 'required|min:3']
        );
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        } else {
            $message = new Message();
            $message->name = $data['name'];
            $message->email = $data['email'];
            $message->message = $data['message'];
            $message->save();
            Session::flash('done', 'Sucess!');
            return Redirect::back();
        }
    }

    public function addreview(Request $data) {
        if (Auth::check()) {
            $old = Rate::where('product_id', $data['product_id'])->where('user_id', Auth::user()->id)->get()->first();
            try {
                if (empty($old)) {
                    $review = new Rate();
                    $review->value = $data['rate'];
                    $review->product_id = $data['product_id'];
                    $review->user_id = Auth::user()->id;
                    $review->save();
                } else {
                    $old->value = $data['rate'];
                    $old->save();
                }
                return 'success';
            } catch (Exception $e) {
                return error;
            }
        } else {
            
        }
    }

    public function login(Request $data) {
        // $un_matched = Cart::where('user_id', '=', Session::getId())->get();
        $email = $data['email'];
        $password = $data['password'];
        $validator = Validator::make($data->all(), [
                    'email' => 'required|email',
                    'password' => 'required'
        ]);
        if (!$validator->passes()) {
//dd($validator->errors());
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {


            return response()->json(array('status' => 'true', 'message' => "Susscefully Loginned, Go to
               <a href='' class=''>Home</a>
             "));
                }
        else {
           // dd($validator);

//            return redirect()
//                ->back()
//                ->withErrors($validator);
            return response()->json(array('status' => 'false', 'message' => "Please check your email and password"));
        }
    }

    public function register(Request $data) {
        // $un_matched = Cart::where('user_id', '=', Session::getId())->get();
        $validator = Validator::make($data->all(), [
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6']
        );
        if ($validator->fails()) {
            $messages = $validator->errors();
            return response()->json(array('status' => 'false', 'message' => $messages->all()));
        } else {
            $main = new User();
            $main->name = $data['name'];
            $main->email = $data['email'];
            $main->password = $data['password'];

            $main->permission = 2;
            $main->permission = 2;

            $main->save();
            Auth::login($main);
            return response()->json(array('status' => 'true', 'message' =>  "Susscefully Loginned, Go to
               <a href='' class=''>Home</a>
             "));

        }
    }

    public function smallcartcontent() {

        $card = $_SESSION['cart'];
//   dd($card);
  return view('site.smallcartcontent')->with('card', $card);

    }



public function addtocart($poid) {
        $product = Product::find($poid);
        $q = 1; //initial quntity
        if (isset($_SESSION['cart'])) {
            if (is_array($_SESSION['cart'])) {
                $i = $this->product_exists($poid);
                if ($i >= 0) {//if producr already in shop cart
                    if ($product->quantity < ($_SESSION['cart'][$i]['quantity'] + 1)) {
                        return $product->quantity;
                    }
                    $_SESSION['cart'][$i]['quantity'] ++;
                } else {
                    if ($product->quantity < 1) {
                        return $product->quantity;
                    }
                    $max = count($_SESSION['cart']);
                    $_SESSION['cart'][$max]['productid'] = $poid;
                    $_SESSION['cart'][$max]['quantity'] = $q;
                }
            }
        } else {
// for first element in shop cart
            $_SESSION['cart'] = array();
            $_SESSION['cart'][0]['productid'] = $poid;
            $_SESSION['cart'][0]['quantity'] = $q;
        }
        return "done";
    }

    public function product_exists($pid) {
        //check if product exist in cart or not
        $pid = intval($pid);
        $max = count($_SESSION['cart']);
        $flag = -1;
        for ($i = 0; $i < $max; $i++) {
            if ($pid == $_SESSION['cart'][$i]['productid']) {
                $flag = $i;
                return $i;
            }
        }
        return $flag;
    }

  

    

    public function getcartcontent() {
        $card = $_SESSION['cart'];
        return view('site.cartcontent',compact('card'));
    }

    public function gettotalcontent() {
        $card = $_SESSION['cart'];
        $totalship=$_SESSION['totalship'];
        return view('site.totalcontent',compact('totalship','card'));
    }




public function removfromcart($pid) {
        $pid = intval($pid);
        $max = count($_SESSION['cart']);
        for ($i = 0; $i < $max; $i++) {
            if ($pid == $_SESSION['cart'][$i]['productid']) {
                unset($_SESSION['cart'][$i]);
                break;
            }
        }
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
    public function UpdateCart($pid, $new_q) {
        $pid = intval($pid);
        $product = Product::find($pid);
        $max = count($_SESSION['cart']);
        for ($i = 0; $i < $max; $i++) {
            if ($pid == $_SESSION['cart'][$i]['productid']) {
                if ($product->quantity < $new_q) {
                    return $product->quantity;
                }
                $_SESSION['cart'][$i]['quantity'] = $new_q;
                break;
            }
        }
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        return "done";
    }

    public function subscribe(Requests\ContactUsRequest $request) {
                  
      $model = new Subscribe();
        $insert = $model->create($request->all());
        if ($insert) {
            if ($request->ajax())
                return response()->json(array('status' => 'true', 'message' => "Done Successfully, Your Message is Sent"));
            return redirect()->back()->with('success', "Done Successfully, Your Message is Sent");
        } else {
            if ($this->request->ajax())
                return response()->json(array('status' => 'false', 'message' => trans('lang.addedfailed')));
            return redirect()->back()->with('failed', trans('lang.addedfailed'));
        }
    }

    public function addtowishlist($id) {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $check = Wlist::where('user_id', '=', $user_id)->where('product_id', '=', $id)->first();

            if (count($check) >= 1) {
                $check->delete();
                return "unlike";
            } else {
//New product
                $item = new Wlist();
                $item->user_id = $user_id;
                $item->product_id = $id;
                $item->save();
                return "like";
            }
        }
    }

    function removefromwlist($id) {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $check = Wlist::where('user_id', '=', $user_id)->where('product_id', '=', $id)->first();
            if (count($check) >= 1) {
                $check->delete();
                return ("done");
            }
        }
        return 'error';
    }

    public function postcheckout(Request $data) {
        $validator = Validator::make($data->all(), [
                    'name' => 'required|max:255',
                    'email' => 'required|email', 'phone' => 'required',
                    'address' => 'required', 'city' => 'required',
                    'country' => 'required', 'code' => 'required'
        ]);
// Check if the form validates with success
        if ($validator->passes()) {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->name = $data['name'];
            $order->email = $data['email'];
            $order->phone = $data['phone'];
            $order->address = $data['address'];
            $order->city = $data['city'];
            $order->country = $data['country'];
            $order->code = $data['code'];
            $card = $_SESSION['cart'];
            if (count($card) < 1) {
                return Redirect::to('Cart');
            }
            $total = 0;
            foreach ($card as $p) {
                $pro = Product ::find($p['productid']);
                $total +=($pro->price - ($pro->price * ($pro->offer / 100))) * $p['quantity'];
            }
            $order->total_price = $total;
            $order->save();
            foreach ($card as $p) {
                $order_det = new Order_details();
                $order_det->product_id = $p['productid'];
                $order_det->quntity = $p['quantity'];
                $order_det->order_id = $order->id;
                $order_det->save();
            }
            unset($_SESSION['cart']);
            Session::flash('done', 'hh');
            return Redirect::to('Cart');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }






}
