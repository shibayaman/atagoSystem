<?php

namespace App\Http\Controllers;
use Illnminate\Validation\Roule;
use Illuminate\Http\quest;
use App\Models\cust_Reresister;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//use App\Http\Requests\cust_resister_Request;
use Redirect;
use Validator;
class account_resister_Controller extends Controller
{

    // public $validateRules = [
    //     'name' => 'max:20',
    //     'kana' => ['max:20','regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
    //     'mail' => 'email | max:50',
    //     'mail2' => 'email | max:50',
    //     'zip' => 'numeric',
    //     'pref' => 'required',
    //     'city' => 'required',
    //     'other' => 'required',
    //     'phone' => 'required',
    //     'phone2' => 'required',
    //     'pass' => 'required | min:8',
    // ];

    // public $validateMessages = [
    //     "required" => "必須項目です。",
    //     "integer" => "整数で入力してください。",
    //     "pass.min" => "8文字以上で入力してください。",
    //     "email" => "メールアドレスの形式で入力してください。",
    //     "numeric" => "数値で入力してください。",
        
    // ];

    public function store(request $request)

    {
    
        $request->validate([
            
            'username' => 'required',
            'kana_name' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'email' => ['email','max:50','unique:cust_resisters'],
            'email2' => 'nullable | email | max:50 | different:mail_address | unique:cust_resisters',
            'address_number' => 'numeric',
            'address1' => 'required',
            'address2' => 'required',
            'address3' => 'required',
            'phone_number' => ['numeric','unique:cust_resisters'],
            'urgent_phone_number' => ['nullable','numeric','unique:cust_resisters','different:phone_number'],
            'password' => ['required','min:8','regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,}+\z/','unique:cust_resisters'],
            'password2' => 'required | same:password',
            'kiyaku' => 'required',
        ],[

            'kana_name.regex' => "カタカナで入力してください",
            'email.unique' => "無効なメールアドレスです",
            'email2.different' => "同じメールアドレスは登録できません",
            'email2.unique' => "無効なメールアドレスです",
            'numeric' => "数値で入力してください",
            'phone_number.unique' => "無効な電話番号です",
            'urgent_phone_number.unique' => "無効な電話番号です",
            'urgent_phone_number.different' => "同じ電話番号は登録できません",
            'password.min' => "パスワードが短すぎます",
            'password.regex' => "複雑なパスワードを入力してください",
            'password2.same' => "パスワードが一致しません",
            'password.unique' => "無効なパスワードです",
            'kiyaku.required' => "利用規約に同意してください",
        ]);
        
        // $data = Request::all();
 
        
        // $val = Validator::make(
        //     $data,
        //     $this->validateRules,
        //     $this->validateMessages
        // );
 
        // //バリデーションNGの場合
        // if($val->fails()){
        //     return redirect('/accountresister')->withErrors($val)->withInput();
        // }

        $name = $request->username;
        $kana = $request->kana_name;
        $mail = $request->email;
        $mail2 = $request->email2;
        $zip = $request->address_number;
        $pref = $request->address1;
        $city = $request->address2;
        $other = $request->address3;
        $phone = $request->phone_number;
        $phone2 = $request->urgent_phone_number;
        $pass = Hash::make($request->password);
        

        $cust_resister = new cust_resister;


        $cust_resister->username = $name;
        $cust_resister->kana_name = $kana;
        $cust_resister->password = $pass;
        $cust_resister->email = $mail;
        $cust_resister->email2 = $mail2;
        $cust_resister->address_number = $zip;
        $cust_resister->address1 = $pref;
        $cust_resister->address2 = $city;
        $cust_resister->address3 = $other;
        $cust_resister->phone_number = $phone;
        $cust_resister->urgent_phone_number = $phone2;
        
       
        $cust_resister->save();

        $msg = "登録";

        return redirect('/complete');

    }

    public function getLogout(){
        Auth::logout();

        return redirect('/');
    }
}


