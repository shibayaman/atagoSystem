<?php

namespace App\Http\Controllers;
use Illnminate\Validation\Roule;
use Illuminate\Http\quest;
use App\Models\cust_Resister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

//use App\Http\Requests\cust_resister_Request;
use Redirect;
use Validator;
class account_edit_Controller extends Controller
{

    

    public function store(request $request)

    {
    
        $request->validate([
            
            'kana_name' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u'],
            'email' => ['email','max:50','unique:cust_resisters'],
            'email2' => 'nullable | email | max:50 | different:mail_address | unique:cust_resisters',
            'address_number' => 'numeric',
            'phone_number' => ['numeric','max:12','unique:cust_resisters'],
            'urgent_phone_number' => ['nullable','max:12','numeric','unique:cust_resisters','different:phone_number'],
            'password2' => ['min:8','regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,}+\z/','unique:cust_resisters'],
            'password3' => 'same:password2',
        ],[

            'kana_name.regex' => "カタカナで入力してください",
            'email.unique' => "無効なメールアドレスです",
            'email2.different' => "同じメールアドレスは登録できません",
            'email2.unique' => "無効なメールアドレスです",
            'numeric' => "数値で入力してください",
            'phone_number.unique' => "無効な電話番号です",
            'urgent_phone_number.unique' => "無効な電話番号です",
            'urgent_phone_number.different' => "同じ電話番号は登録できません",
            'urgent_phone_number.max' => "無効な電話番号です",
            'phone_number.max' => "無効な電話番号です",
            'password2.min' => "パスワードが短すぎます",
            'password2.regex' => "複雑なパスワードを入力してください",
            'password3.same' => "パスワードが一致しません",
            'password2.unique' => "無効なパスワードです",
            
        
        ]);
        
       

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
        $pass = Hash::make($request->password2);
        

        $cust_resister = new cust_resister;
        $user = \Auth::user()->id;

        $cust_resister::find($user);

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

    public function editor (Request $request){

        $editcomponent = $request->input('edit-comp');

        $user = \Auth::user();

        if($editcomponent == "editname"){

            return view('editdecision/editname',compact("user"));
        
        }elseif($editcomponent == "editemail"){

            return view('editdecision/editemail',compact("user"));

        }elseif($editcomponent == "editaddress"){

            return view('editdecision/editaddress',compact("user"));

        }elseif($editcomponent == "editphone"){

            return view('editdecision/editphone',compact("user"));

        }elseif($editcomponent == "editpass"){

            return view('editdecision/editpass',compact("user"));

        }
    }
}


