<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use App\Models\message;



class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data=food::all();
        return view("admin.foodmenu",compact('data'));
    }

//for uploading food//
public function upload(Request $request)
 {
    $data = new food;
    //for image section//
    $image =$request->image;
    $imagename = time().'.'.$image->getClientOriginalExtension();
    $request->image->move('foodimage',$imagename);
    $data->image=$imagename;

    //for title//
    $data->title=$request->title;
    $data->price=$request->price;
    $data->description=$request->description;
    $data->save();
    return redirect()->back();
 }

//for deleting food menu from admin panel//
public function deletefood($id)
{
    $data=food::find($id);
    $data->delete();
    return redirect()->back();
}

//for updating food menu from admin panel//


public function updateview($id)
{
    $data=food::find($id);


    return view('admin.update',compact('data'));
}

public function update(Request $request , $id)
{
  $data=food::find($id);


   $image=$request->image;


   $imagename =time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage',$imagename);

            $data->image=$imagename;


            $data->title=$request->title;

            $data->price=$request->price;

            $data->description=$request->description;

            $data->save();

            return redirect()->back();


}

///////////////////////////------------/----/----------------/-


//for displaying order food data from database to the admin panel//
   public function order()
   {
    $data=order::all();


    return view('admin.orders',compact('data'));


   }

   // for searching order food in admin panel//
   public function search(Request $request)
{

  $search=$request->search;

  $data=order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')
  ->get();


  return view('admin.orders',compact('data'));
 }


//for the contact us page //
 public function message(Request $request)
       {

              //   this code is for form validation
              $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required|email',
                    'subject' => 'required',
                    'message' => 'required',
                    
                  //   password conformation is automatically handlled by laravel
                ]
            );
           $customer_feedback=new message;
           $customer_feedback->name=$request['name'];
            $customer_feedback->email=$request['email'];
            $customer_feedback->subject=$request['subject'];
            $customer_feedback->message=$request['message'];
            $customer_feedback->save();
              return redirect('/');
    
    

        }


        //for displaying customer message in admin panel//
        public function reportmsg()
        {
         $data=message::all();
     
     
         return view('admin.message',compact('data'));
     
     
        }

   //for deleting order from admin panel//
   public function deleteorder($id)
{
    $data=order::find($id);
    $data->delete();
    return redirect()->back();
}

//for deleting message from admin panel//

public function deletemessage($id)
{
    $data=message::find($id);
    $data->delete();
    return redirect()->back();
}




}