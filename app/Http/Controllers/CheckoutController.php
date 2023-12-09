<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\dummy_user;
use App\Models\payment_method;
use App\Models\products_in_cart;

class CheckoutController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $voucher_code = ([
        ['id' => "qVL4un", "discount" => 30], 
        ['id' => "TB0Rad", "discount" => 20], 
        ['id' => "Rviani", "discount" => 10], 
        ['id' => "JLl7l5", "discount" => 50], 
        ['id' => "KXGZMp", "discount" => 25],
        ['id' => "S8KAwy", "discount" => 15], 
        ['id' => "nGzSk2", "discount" => 35], 
        ['id' => "3Siicj", "discount" => 40], 
        ['id' => "QUaDc7", "discount" => 18], 
        ['id' => "xvvRUF", "discount" => 22]
    ]);

    public function getAllElement($id = 1){
        $user = dummy_user::find($id);

        $voucher_code = $this->voucher_code;

        $payment_method = payment_method::all();

        $products = products_in_cart::where('id_user', $id)
        ->where('payment_status', false)->get();
        return view('checkout', compact('user', 'products', 'voucher_code', 'payment_method'));
    }

    public function processingRequest(Request $request){
        $action = $request->input('action');

        switch($action){
            case 'validateVoucher':
                return $this->validateVoucher($request);
                break;
            case 'validatePaymentMethod':
                return $this->validatePaymentMethod($request);
                break;
            case 'changeAddress':
                return $this->changeAddress($request, 1);
                break;
            case 'pay':
                return $this->pay($request);
                break;
        }
    }

    public function changeAddress(Request $request, $id = 1){
        $user = dummy_user::find($id);

        $request->validate([
            'alamat' => 'required|string'
        ]);

       try{
            sleep(1);
            $user->alamat = $request->input('alamat');
            $user->save();
            return redirect()->route('processingRequest')->with('success', "User address updated successfully!");
       }catch(\Exception $e){
            return redirect()->route('processingRequest')->with('error', "User address failed to be updated!");
       }
    }

    public function validateVoucher(Request $request){
        $voucherCode = collect($this->voucher_code);

        $selected_voucher = $voucherCode->firstWhere('id', $request->input('selectedVoucher'));

        sleep(1);

        if(!empty($selected_voucher)){
            session()->put('selected_voucher', $selected_voucher);
            return redirect()->route('processingRequest')->with('success', 'Voucher used successfully!');
        }else{
            return redirect()->route('processingRequest')->with('error', 'Voucher is invalid!');
        }
    }

    public function validatePaymentMethod(Request $request){
        $total_payment = $request->input('total_payment');

        $payment_method = json_decode($request->input('payment_method'), true);
        $total_balance = $payment_method['total_saldo'];
        $selected_payment_method = $payment_method['nama_payment_method'];

        sleep(1);

        if($total_balance == -1){
            session()->put('selected_payment_method', $selected_payment_method);
            return redirect()->route('processingRequest')->with('success', 'Payment Method Successfully Changed!');
        }else if($total_balance > $total_payment){
            session()->put('selected_payment_method', $selected_payment_method);
            return redirect()->route('processingRequest')->with('success', 'Payment Method Successfully Changed!');
        }else{
            return redirect()->route('processingRequest')->with('error', 'Total balance is lower than the total price!');
        }
    }

    public function pay(Request $request){
        $total_payment = $request->input('total_payment');
        $selected_payment_method = $request->input('selected_payment_method');
        $payment_method = payment_method::where('nama_payment_method', $selected_payment_method)->first();
        $total_balance = $payment_method->total_saldo;

        if($total_balance < $total_payment && $total_balance != -1){
            return redirect()->route('processingRequest')->with('error', 'Total balance is lower than the total price!');
        }

        if($total_balance == "-1"){
            sleep(1);
            try{
                return redirect()->route('welcome')->with('success', 'payment was made successfully!');
            }catch(\Exception $e){
                return redirect()->route('processingRequest')->with('error', 'payment failed to be made!');
            } 
        }else{
            sleep(1);
            try{
                $new_balance = $total_balance - $total_payment;
                $payment_method->total_saldo = $new_balance;
                $payment_method->save();
                return redirect()->route('welcome')->with('success', 'payment was made successfully!');
            }catch(\Exception $e){
                return redirect()->route('processingRequest')->with('error', 'payment failed to be made!');
            } 
        }
    }
}