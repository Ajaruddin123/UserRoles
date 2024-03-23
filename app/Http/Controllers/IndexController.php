<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderPrduct;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function welcome()
    {        
        $roles = Roles::get();
        return view('auth.register',compact('roles'));
    }

    public function allUsers(){

         $allUsers = User::with('roles')->get();
    //    return $allUsers = Roles::with('users')->get();
        return view('all-users',compact('allUsers'));
    }

    // public function addToCart($bookId)
    // {
    //     $userId = auth()->user()->id;
    //     $proExistCart = Cart::where([
    //         'user_id' => $userId,
    //         'book_store_id' => $bookId,
    //     ])->count();
    //     if ($proExistCart <= 0) {
    //         Cart::create([
    //             'user_id' => $userId,
    //             'book_store_id' => $bookId,
    //             'quantity' => 1
    //         ]);
    //     }

    //     return redirect('cart');
    // }

    // public function cart()
    // {
    //     $userId = auth()->user()->id;
    //     $user = auth()->user();
    // //    reurn $cartItems = User::with('cartItems.books')->find($userId); // Eager load product data for each cart item
    //     // $cartItems = $user->cartItems()->with('books')->get(); // Eager load product data for each cart item
    //     return view('cart', compact('cartItems'));
    // }

    // public function checkout()
    // {
    //     $userId = auth()->user()->id;
    //     $user = auth()->user();
    //     $cartItems = $user->cartItems()->with('books')->paginate(); // Eager load product data for each cart item
    //     return view('checkout', compact('cartItems', 'user'));
    // }

    // public function removeItemFromCart($cartId)
    // {
    //     $userId = auth()->user()->id;
    //     Cart::where('cart_id', $cartId)->delete();
    //     $data = [
    //         'statusCode' => 200,
    //     ];
    //     return response()->json($data, 200);
    // }

    // public function updateCart(Request $request, $cartId)
    // {
    //     $quantity = $request->quantity;

    //     Cart::where('cart_id', $cartId)->update([
    //         'quantity' => $quantity,
    //     ]);

    //     $data = [
    //         'statusCode' => 200,
    //     ];
    //     return response()->json($data, 200);
    // }

    // public function order(Request $request)
    // {
      
        
    //     $user = auth()->user();
    //     $userId = $user->id;
    //     // return $carts = $user->cartItems;
    //     User::where('id', $userId)->update([
    //         'country' => $request->c_country,
    //         'state' => $request->c_state_country,
    //         'city' => $request->c_city,
    //         'zip' => $request->c_postal_zip,
    //         'phone' => $request->c_phone,
    //         'address' => $request->c_address,
    //     ]);

    //     $orders =   Order::create([
    //         'user_name' => $user->name,
    //         'user_id' => $user->id,
    //         'total_price' => $request->grand_total,
    //         'order_status' => 1,
    //     ]);

    //     $carts = $user->cartItems;
    //     foreach ($carts as $key => $value) {      
    //         $books = BookStore::where('id',$value->book_store_id)->first();
    //         $price = $books->price;
    //         $totalPrice = $price * $value->quantity;
    //         $orders->products()->attach($value->book_store_id, ['quantity' => $value->quantity, 'user_id' => $userId,'price'=>$price,'total_price'=>$totalPrice]);
    //     }

    //     Cart::where('user_id', $userId)->delete();

    //     return redirect('thankyou/'.$orders->id);
    // }

    // public function thankyou($orderId){        
    //     $user = auth()->user();
    //     $userId = $user->id;
    //     $order = Order::with('products')->find($orderId);

    //     return view('thankyou',compact('order'));
    // }

    // public function allOrders(){
    //     $user = auth()->user();
    //     $userId = $user->id;
    //     $orders = Order::with('products')->where('user_id',$userId)->paginate(10);

    //     return view('orders',compact('orders'));
    // }
}
