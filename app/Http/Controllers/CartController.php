<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Customer;
use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Cart_Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('id_cus', Auth::guard('cus')->user()->id)->get();
        return view('client.page.cart', compact('cart'));
    }
    public function add(Product $product, Request $req)
    {
        $cart = Cart::where('id_cus', Auth::guard('cus')->user()->id)->where('id_pro', $product->id)->first();

        if ($cart) {

            //    tìm kiếm các id_cus xem có trong giỏ hàng hay ko và lấy ra sản phẩm trong giỏ hàng 
            $cartItems = Cart::where('id_cus', Auth::guard('cus')->user()->id)->get();

            //    Kiểm tra xem trong giỏ hàng có sản phẩm trùng ko 
            foreach ($cartItems as $cartItem) {
                if ($cartItem->id_pro == $product->id) {

                    // lấy ra các thuộc tính của sản phẩm có trong cart
                    $cart_attribute = array_map('strval', $cartItem->cart_att->pluck('id')->toArray());

                    // lấy ra tất cả thuộc tính lúc thêm vào giỏ hàng 
                    $new_att = $req->att;


                    if ($cart_attribute == $new_att) {

                        // cập nhật số lượng giỏ hàng 
                        $cartItem->quantity += $req->quantity;
                        $cartItem->save();
                    } else {

                        $cart = Cart::create([
                            'name' => $product->name,
                            'image' => $product->image,
                            'price' => $product->price,
                            'quantity' => $req->quantity,
                            'totalPrice'=>$product->price * $req->quantity,
                            'id_pro' => $product->id,
                            'id_cus' => Auth::guard('cus')->user()->id,
                        ]);


                        $cart_item = $req->att;
                        foreach ($cart_item as $key => $value) {

                            Cart_Item::create([
                                'id_cart' => $cart->id,
                                'id_att' => $value
                            ]);
                        }
                    }
                }
            }
        } else {

            $cart = Cart::create([
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $req->quantity,
                'totalPrice'=>$product->price * $req->quantity,
                'id_pro' => $product->id,
                'id_cus' => Auth::guard('cus')->user()->id,
            ]);
            $cart_item = $req->att;
            foreach ($cart_item as $key => $value) {

                Cart_Item::create([
                    'id_cart' => $cart->id,
                    'id_att' => $value
                ]);
            }
        }



        return redirect()->route('cart.view');
    }


    public function update_att(Cart $cart_item, Request $req)
    {
        $cart_att = Cart_Item::where('id_cart', $cart_item->id)->get();
        foreach ($cart_att as $value) {
            $value->delete();
        }

        $cart_att = $req->att;

        foreach ($cart_att as $value) {

            Cart_Item::create([

                'id_cart' => $cart_item->id,
                'id_att' => $value
            ]);
        }
        return redirect()->back();
    }


    public function update_quantity(Request $request , Cart $cart_item)
    {
        
       
        $cart_item->quantity = $request->quantity;
        $cart_item->save();     
     

        $cart_item->totalPrice = $request->quantity * $cart_item->price;
        // dd($cart_item->totalPrice);
        $cart_item->save();

        return redirect()->back();
    }


    public function delete_cart(Cart $cart_item)
    {

        $cart_atts = Cart_Item::where('id_cart' , $cart_item->id)->get();

       foreach ($cart_atts as $value) {
           $value->delete();
       }

       $cart_item->delete();

       return redirect()->back();
    }


    public function checkout()
    {
        
        $auth = auth('cus')->user();
       return view('client.page.checkout' , compact('auth'));
    }

    public function order_checkout(Request $req , Cart $cart)
    {
       $form_data = $req->only('name' , 'email' , 'phone' , 'address' , 'token' , 'order_note' , 'shipping_method', 'payment_method' );

       $form_data['cus_id'] = auth('cus')->id();

       $order = Order::create($form_data);

       $cart = Cart::where('id_cus', Auth::guard('cus')->user()->id)->get();

        
      foreach($cart as $items) {
        $data = [
            'product_id' =>$items->id_pro,
            'order_id' =>$order->id,
            'quantity' =>$items->quantity,
            'price'=>$items->price,

        ];
       OrderDetail::create($data);
      }

      $email =  $req->email;
      $token = Str::random(50);
      $order ->update(['token' => $token]);
      Mail::to($email)->send(new OrderMail($order , $token));

     
      
    }

    public function verifyOrder($token)
    
    {
        $order = Order::where('token' , $token)->firstOrFail();
        $order ->update(['token' =>null]);
        $order->status = 1; 
        $order->save();

        return redirect()->route('home.index')->with('yes', 'Bạn đã đặt hàng thành công');



    }
}
