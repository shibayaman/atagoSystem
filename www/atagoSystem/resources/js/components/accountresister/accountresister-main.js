import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default function Main() {

    return (
        <div>
            
            <div className="account-bread">
                <ul itemScope itemType="http://data-vocabulary.org/Breadcrumb">

                    <li><a href="/" itemProps="url"><span itemProps="title">トップ</span></a></li>
                    <li><span itemProps="title">アカウント作成</span></li>
                    
                </ul>
            </div>

            
            <div className="account">

                <h1>アカウントを作成</h1>
                <hr></hr><br></br>
                

                <form action="newaccount" mathod="get" className="account-form" encType="multipart/form-data">
                    {/* {{JSON($errors->all())}} */}
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />
                    <div>
                        <span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　　　名前　：　<input type="text" placeholder="山田太郎" className="cust-name" name="cust_name" required autoComplete="cust_name" autoFocus></input></span>
                    </div><br></br>

                    <div>
                        <span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　フリガナ　：　<input type="text" placeholder="ヤマダタロウ" className="cust-kana-name" name="cust_kana_name" required autoComplete="cust_kana_name" ></input></span></div><br></br>
                        
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　メールアドレス　：　<input type="email" className="mail-address" name="mail_address" required autoComplete="mail_address" ></input></span></div><br></br>
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">緊急用メールアドレス　：　<input type="email" className="mail-address2" name="mail_address2" autoComplete="mail_address2"></input></span></div><br></br>
                    <hr></hr><br></br>

                    <div className="required"><font color="white">必須</font></div>
                    <div className="input-component"><label>　　　　　　　郵便番号　：</label>　<input type="text" placeholder="5360015" className="address-number" size="8" maxLength="7" name="address_number" required autoComplete="address_number" ></input>　<button className="auto-search">住所検索</button></div><br></br>

                    <div className="input-component"><label>　　　　　　都道府県　：　</label><input type="text" placeholder="大阪府" className="address1" name="address1" required autoComplete="address1" ></input></div><br></br>
                    <div className="input-component"><label>　　　　　　市区町村　：　</label><input type="text" placeholder="大阪市北区中崎北" className="address2" name="address2" required autoComplete="address2" ></input></div><br></br>
                    <div className="input-component"><label>　　　番地以降の住所　：　</label><input type="text" placeholder="" className="address3" name="address3" required autoComplete="address3" ></input></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　電話番号　：　<input type="text" className="phone-number" name="phone_number" required autoComplete="phone_number" ></input></span></div><br></br>
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">　　　緊急用電話番号　：　<input type="text" className="urgent-phone-number" name="urgent_phone_number"></input></span></div><br></br>
                    <div><br></br>例：電話番号が「080-xxx-xxx」の場合、「080xxxxxx」のようにハイフンを取り除いて入力してください</div>
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　パスワード　：　<input type="password" className="pass" name="password" required autoComplete="password" ></input></span></div><br></br>
                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">パスワード（再入力）　：　<input type="password" className="pass" name="password2" required autoComplete="password2" ></input></span></div><br></br>
                    <div><br></br>パスワードは8文字以上（アルファベット1文字以上、数字1文字以上を含む）で入力してください</div>
                    <hr></hr><br></br>

                    <div className="kiyaku"><a href="#">利用規約</a></div>
                    <div>利用規約に同意する<input type="checkbox" className="kiyaku-consented" value="kiyaku" name="kiyaku"></input></div>
                    <br></br><br></br>

                    <div><input type="submit" className="account-sub" value="登録"></input></div>
                    <br></br>

                    
                </form>

            </div>
        <br></br>
        </div>

    );
}