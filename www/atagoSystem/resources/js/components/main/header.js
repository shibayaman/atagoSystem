import React, { Component } from 'react';
import ReactDOM from 'react-dom';



export default function Header() {

    return (
        <div>

            <header className="search-header">

                
                <a href="/" id="logo"><img src="../images/atagonlogo.png" height="40px"></img></a>
                
                
                <form action="/" method="get" className="search-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <select id="siborikomi">

                        <option value="all" checked>すべて</option>
                        
                    </select>

                    <input type="text" name="search-text" id="search-text" placeholder="検索したい文字列を入力"></input>

                    <button type="submit" id="sub" >検索</button>

                </form>
                
                <div className="account">
                    <ul id="account-list">
                        <li className="ul-style">アカウント
                            <ul className="sub-list triangle">
                                <li><a href="/accountresister">アカウントを作成する</a></li>
                                <li><a href="/accountedit">アカウント情報を確認する</a></li>
                                <li><a href={linktext}>{login}</a></li>
                            </ul>
                        </li>
                    </ul>  

                    
                </div>
                <div className="cart"><a href="#">カート</a></div>
                <div className="toiawase"><a href="/toiawase">お問い合わせ</a></div>

                <div className="loginName"><a href="/accountedit"><font color="red">{name}</font></a></div>
                <div className="aotodoke"><font color="white">{aotodoke}</font></div>

            </header>
            
        </div>

    );
}