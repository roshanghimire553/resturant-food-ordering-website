<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Order;



class HomeController extends Controller
{
    public function index()
    {

        return view("home");
    }


    public function contactus()
    {

        return view("contactus");
    }

    public function colddrinks()
    {

        return view("colddrinks");
    }

    public function fastfood()
    {

        return view("fastfood");
    }
    public function special()
    {

        return view("special");
    }







   


    public function redirects()
    {
        $data=food::all();
        $usertype = Auth::user()->usertype;
        if($usertype== '1')
        {
            return view('admin.adminhome');
        }
        else
        {
            $user_id=Auth::id();

            $count=cart::where('user_id',$user_id)->count();
            
        return view('customer.user',compact('data','count'));
        }
    }

    //for adding food to the cart//
    
    public function addcart(Request $request,$id)
    {
    if(Auth::id())
    {

        $user_id=Auth::id();

        $foodid=$id;

        $quantity=$request->quantity;


        $cart=new cart;

        $cart->user_id=$user_id;

        $cart->food_id=$foodid;

        $cart->quantity=$quantity;

        $cart->save();


        return redirect()->back();
    }

    else
    {

        return redirect('/login');
    }

   }
   //for showing cart//
   
public function showcart(Request $request,$id)
{

     $count=cart::where('user_id',$id)->count();

        if(Auth::id()==$id)
        {

            $data2=cart::select('*')->where('user_id', '=' , $id)->get();

            $data=cart::where('user_id',$id)->join('food', 'carts.food_id', '=' , 'food.id')->get();

            return view('showcart',compact('count','data','data2'));

        }
        else

        {

            return redirect()->back();
        }
    }

    public function remove($id)
    {

            $data=cart::find($id);
            $data->delete();
            return redirect()->back();
    }


//for the final order of the food//
    public function orderconfirm(Request $request)
    {


            foreach($request->foodname as $key =>$foodname)
            {
                
                $data=new order;
            
                $data->foodname=$foodname;
               
                $data->price=$request->price[$key];


                $data->quantity=$request->quantity[$key];

                $data->name=$request->name;

                $data->phone=$request->phone;

                $data->address=$request->address;

               
                $data->save();

              
            }
            $count=cart::where('user_id',Auth::id())->get();
            cart::destroy($count);


         
            return redirect('/redirects')->with('status', "order placed successfully");


      }


}