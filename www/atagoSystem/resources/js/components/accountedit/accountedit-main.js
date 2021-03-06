import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default function Main() {

    return (
        <div>
            
            <div className="account-bread">
                <ul itemScope itemType="http://data-vocabulary.org/Breadcrumb">

                    <li><a href="/" itemProps="url"><span itemProps="title">トップ</span></a></li>
                    <li><span itemProps="title">マイページ</span></li>
                    
                </ul>
            </div>

            
            <div className="account">

                <br></br><h1>アカウント情報</h1>
                <hr></hr><br></br>

                <h2>あなたのユーザIDは　<font color="red">{id}</font>　です</h2>
                <hr></hr><br></br>

                <form action="/editdecision" method="get" className="account-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <div><span className="account-view">名前</span><span className="edit-view">{name}</span><span className="edit-button" name="edit-comp" value="editname"><button type="submit" name="edit-comp" id="editname" value="editname">変更</button></span></div><br></br><br></br>

                    <div><span className="account-view">フリガナ</span><span className="edit-view">{kana}</span></div><br></br><br></br>
                    <hr></hr><br></br>

                    <div><span className="account-view">メールアドレス</span><span className="edit-view">{mail}</span><span className="edit-button" name="edit-comp" value="editemail"><button type="submit" name="edit-comp" id="editemail" value="editemail">変更</button></span></div><br></br><br></br>

                    <div><span className="account-view">緊急時のメールアドレス</span><span className="edit-view">{mail2}</span> </div><br></br><br></br>

                    <hr></hr><br></br>

                    <div><span className="account-view">住所</span><span className="edit-view">{pref + city + other}</span><span className="edit-button" name="edit-comp" value="editaddress"><button type="submit" name="edit-comp" id="editaddress" value="editaddress">変更</button></span></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="account-view">電話番号</span><span className="edit-view">{phone}</span><span className="edit-button" name="edit-comp" value="editphone"><button type="submit" name="edit-comp" id="editphone" value="editphone">変更</button></span></div><br></br><br></br>
        
                    <div><span className="account-view">緊急時の電話番号</span><span className="edit-view">{phone2}</span> </div><br></br><br></br>
                    <hr></hr><br></br>

                    <div><span className="account-view">パスワード</span><span className="edit-button" name="edit-comp" value="editpass"><button type="submit" name="edit-comp" id="editpass" value="editpass">変更</button></span></div><br></br><br></br>

                    <hr></hr><br></br>

                    <div><button className="account-back" onclick="history.back()">戻る</button></div>
                    
                    <br></br>

                    
                </form>

            </div>
        <br></br>
        </div>

    );
}