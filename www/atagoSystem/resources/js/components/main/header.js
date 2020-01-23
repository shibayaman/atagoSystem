import React, { Component } from 'react';
import ReactDOM from 'react-dom';



export default function Header() {

    return (
        <div>

            <header className="search-header">

                
                <a href="/" id="logo"><img src="../images/atagonlogo.png" height="40px"></img></a>
                
                
                <form action="/" method="post" className="search-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <select id="siborikomi">

                        <option value="all" checked>すべて</option>
                        <option value="pencil">鉛筆</option>
                        <option value="mechanical-pencil">シャープペンシル</option>

                    </select>

                    <input type="text" id="search-text" placeholder="検索したい文字列を入力"></input>

                    <button type="submit" id="sub" >検索</button>

                    
                </form>
                
                <div className="account">
                    <ul id="account-list">
                        <li className="ul-style">アカウント
                            <ul className="sub-list triangle">
                                <li><a href="/accountresister">アカウントを作成する</a></li>
                                <li><a href="/accountedit">アカウント情報を変更する</a></li>
                                <li><a href={linktext}>{login}</a></li>
                            </ul>
                        </li>
                    </ul>  
                </div>
                
                <div><a href=""></a></div>

                <div className="loginName"><font color="red">{name}</font></div>
            </header>
        
        </div>

    );
}