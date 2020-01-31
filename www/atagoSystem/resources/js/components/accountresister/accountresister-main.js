import React, { useState } from 'react';
import ReactDOM from 'react-dom';





export default function Main() {



    const [usename,setUsename] = useState(oldname);
    const [usekana,setUsekana] = useState(oldkana);
    const [usemail,setUsemail] = useState(oldmail);
    const [usemail2,setUsemail2] = useState(oldmail2);
    const [usezip,setUsezip] = useState(oldzip);
    const [usepref,setUsepref] = useState(oldpref);
    const [usecity,setUsecity] = useState(oldcity);
    const [useother,setUseother] = useState(oldother);
    const [usephone,setUsephone] = useState(oldphone);
    const [usephone2,setUsephone2] = useState(oldphone2);



    const handleNameChange = (e)=> {setUsename(e.target.value);};
    const handleKanaChange = (e)=> {setUsekana(e.target.value);};
    const handleMailChange = (e)=> {setUsemail(e.target.value);};    
    const handleMail2Change = (e)=> {setUsemail2(e.target.value);};
    const handleZipChange = (e)=> {setUsezip(e.target.value);};
    const handlePrefChange = (e)=> {setUsepref(e.target.value);};
    const handleCityChange = (e)=> { setUsecity(e.target.value);};
    const handleOtherChange = (e)=> {setUseother(e.target.value);};
    const handlePhoneChange = (e)=> { setUsephone(e.target.value);};
    const handlePhone2Change = (e)=>{setUsephone2(e.target.value);};
       
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
                
                <form action="newaccount" method="post" className="account-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　　　名前　：　<input type="text" placeholder="山田太郎" className="username" name="username"  onChange={(e) => handleNameChange(e)} value={usename} required autoComplete="username" autoFocus></input></span></div><br></br>
                    <p className="vali"><font color="red">{name}</font></p>


                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　フリガナ　：　<input type="text" placeholder="ヤマダタロウ" className="kana-name" name="kana_name" onChange={(e) => handleKanaChange(e)} value={usekana} required autoComplete="kana_name" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{kana}</font></p>
                    
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　メールアドレス　：　<input type="email" className="email" name="email"  onChange={(e) => handleMailChange(e)} value={usemail} required autoComplete="email" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{mail}</font></p>
                   
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">緊急時のメールアドレス　：　<input type="email" className="email2" name="email2" onChange={(e) => handleMail2Change(e)} value={usemail2}　autoComplete="email2"></input></span></div><br></br>
                    <p className="vali"><font color="red">{mail2}</font></p>
                    
                    <hr></hr><br></br>

                    <div className="required"><font color="white">必須</font></div>
                    <div className="input-component"><label>　　　　　　　郵便番号　：</label>　<input type="text" placeholder="5360015" className="address-number" size="8" maxLength="7" name="address_number" onChange={(e) => handleZipChange(e)} value={usezip} required autoComplete="address_number"></input>　<button className="auto-search">住所検索</button></div><br></br>
                    <p className="vali"><font color="red">{zip}</font></p>

                    <div className="input-component"><label>　　　　　　都道府県　：　</label><input type="text" placeholder="大阪府" className="address1" name="address1" onChange={(e) => handlePrefChange(e)} value={usepref} required autoComplete="address1" ></input></div><br></br>
                    <div className="input-component"><label>　　　　　　市区町村　：　</label><input type="text" placeholder="大阪市北区中崎北" className="address2" name="address2" onChange={(e) => handleCityChange(e)} value={usecity} required autoComplete="address2" ></input></div><br></br>
                    <div className="input-component"><label>　　　番地以降の住所　：　</label><input type="text" placeholder="2-3-35 ECCコンピュータ専門学校" className="address3" name="address3" onChange={(e) => handleOtherChange(e)} value={useother} required autoComplete="address3" ></input></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　　電話番号　：　<input type="text" className="phone-number" name="phone_number" onChange={(e) => handlePhoneChange(e)} value={usephone} required autoComplete="phone_number" placeholder="ハイフンなし入力"></input></span></div><br></br>
                    <p className="vali"><font color="red">{phone}</font></p>
                    
                    <div><span className="any"><font color="black">任意</font></span><span className="input-component">　　　緊急時の電話番号　：　<input type="text" className="urgent-phone-number" name="urgent_phone_number" onChange={(e) => handlePhone2Change(e)} value={usephone2}></input></span></div><br></br>
                    <p className="vali"><font color="red">{phone2}</font></p>
                    
                
                    <hr></hr><br></br>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">　　　　　パスワード　：　<input type="password" className="pass" name="password" required autoComplete="password" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{pass}</font></p>

                    <div><span className="required"><font color="white">必須</font></span><span className="input-component">パスワード（再入力）　：　<input type="password" className="pass" name="password2" required autoComplete="password2" ></input></span></div><br></br>
                    <p className="vali"><font color="red">{pass2}</font></p>

                    <div><br></br>パスワードは8文字以上（アルファベット1文字以上、数字1文字以上を含む）で入力してください</div>
                    <hr></hr><br></br>

                    <div className="kiyaku"><a href="#">利用規約</a></div>
                    <div>利用規約に同意する<input type="checkbox" className="kiyaku-consented" value="kiyaku" name="kiyaku" id="kiyaku"></input></div>
                    <p><font color="red">{kiyaku}</font></p>
                    <br></br><br></br>

                    <div><input type="submit" className="account-sub" id="sub" value="登録"></input></div>
                    
                    <br></br>

                    
                </form>

            </div>
        <br></br>
        </div>

    );
}