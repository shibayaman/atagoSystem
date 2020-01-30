import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default function Main() {

    return (
        <div>
            
            <div className="account-bread">
                <ul itemScope itemType="http://data-vocabulary.org/Breadcrumb">

                    <li><a href="/" itemProps="url"><span itemProps="title">トップ</span></a></li>
                    <li><a href="/accountedit" itemProps="url"><span itemProps="title">マイページ</span></a></li>
                    <li><span itemProps="title">アカウントj情報変更</span></li>

                    
                </ul>
            </div>

            
            <div className="account">

                <br></br><h1>変更したい項目を編集してください</h1><br></br>
                <hr></hr><br></br>
                
                <form action="/" method="post" className="account-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　　　名前　：　<input type="text" className="username" name="username" value={auth_name} required autoComplete="username" autoFocus></input></span></div><br></br>
                    <p className="vali"><font color="red">{name}</font></p>


                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　フリガナ　：　<input type="text" className="kana-name" name="kana_name" value={auth_kana} required autoComplete="kana_name" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{kana}</font></p>
                    
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　メールアドレス　：　<input type="email" className="email" name="email" value={auth_email} required autoComplete="email" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{mail}</font></p>
                   
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">緊急時のメールアドレス　：　<input type="email" className="email2" name="email2" value={auth_email2} autoComplete="email2"></input></span></div><br></br>
                    <p className="vali"><font color="red">{mail2}</font></p>
                    
                    <hr></hr><br></br>

                    <div className="required"><font color="white">必須</font></div>
                    <div className="input-component"><label>　　　　　　　郵便番号　：</label>　<input type="text" placeholder="5360015" className="address-number" size="8" maxLength="7" name="address_number" value={auth_zip} required autoComplete="address_number"></input>　<button className="auto-search">住所検索</button></div><br></br>
                    <p className="vali"><font color="red">{zip}</font></p>

                    <div className="input-component"><label>　　　　　　都道府県　：　</label><input type="text" placeholder="大阪府" className="address1" name="address1" value={auth_pref} required autoComplete="address1" ></input></div><br></br>
                    <div className="input-component"><label>　　　　　　市区町村　：　</label><input type="text" placeholder="大阪市北区中崎北" className="address2" name="address2" value={auth_city} required autoComplete="address2" ></input></div><br></br>
                    <div className="input-component"><label>　　　番地以降の住所　：　</label><input type="text" placeholder="2-3-35 ECCコンピュータ専門学校" className="address3" name="address3" value={auth_other} required autoComplete="address3" ></input></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　電話番号　：　<input type="text" className="phone-number" name="phone_number" value={auth_phone} required autoComplete="phone_number" placeholder="ハイフンなし入力"></input></span></div><br></br>
                    <p className="vali"><font color="red">{phone}</font></p>
                    
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">　　　緊急用電話番号　：　<input type="text" className="urgent-phone-number" name="urgent_phone_number" value={auth_urgent_phone}></input></span></div><br></br>
                    <p className="vali"><font color="red">{phone2}</font></p>
                    
                
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　前のパスワード　：　<input type="password" className="pass" name="currentpassword" required autoComplete="currentpassword" ></input></span></div><br></br>
                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　新しいパスワード　：　<input type="password" className="pass" name="password" required autoComplete="password" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{pass}</font></p>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">パスワード（再入力）　：　<input type="password" className="pass" name="password2" required autoComplete="password2" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{pass2}</font></p>

                    <div><br></br>パスワードは8文字以上（アルファベット1文字以上、数字1文字以上を含む）で入力してください</div>
                    <hr></hr><br></br>

                    <div><input type="submit" className="account-sub" value="変更を保存する"></input></div>
                    
                    <br></br>

                    
                </form>

            </div>
        <br></br>
        </div>

    );
}