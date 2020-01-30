import React, { Component } from 'react';
import ReactDOM from 'react-dom';



export default function Main() {

    return (
        <div>
            
            <div className="complete-bread">
                <ul itemScope itemType="http://data-vocabulary.org/Breadcrumb">

                    <li><a href="/" itemProps="url"><span itemProps="title">トップ</span></a></li>
                    <li><span itemProps="title">アカウント作成</span></li>
                    <li><span itemProps="title">登録完了</span></li>
                </ul>
            </div>

            <div className="complete">

                <h1>登録が完了しました</h1>
                <hr></hr><br></br>

                <p><a href="/">トップに戻る</a></p>

                <p><a href="/accountlogin">ログイン</a></p>

                <p><a href="/accountedit">登録内容を確認</a></p>
            </div>
        <br></br>
        </div>

    );
}