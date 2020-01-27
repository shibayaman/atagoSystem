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

                <h1>アカウント情報</h1>
                <hr></hr><br></br>

                <h2>あなたのユーザIDは　<font color="red">{id}</font>　です</h2>
                <hr></hr><br></br>

                <form action="/" method="post" className="account-form" encType="multipart/form-data">
                    
                    <input type="hidden" name="_token" value={ document.querySelector('meta[name="csrf-token"').getAttribute('content') } />

                    <div><span className="account-view">    名前　：　{name}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>

                    <div><span className="account-view">フリガナ　：　{kana}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>

                    <hr></hr><br></br>

                    <div><span className="account-view">メールアドレス　：　{mail}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>

                    <div><span className="account-view">緊急時のメールアドレス　：　{mail2}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>

                    <hr></hr><br></br>

                    <div><span className="account-view">住所　：　{pref + city + other}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="account-view">電話番号　：　{phone}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>
        
                    <div><span className="account-view">緊急時の電話番号　：　{phone2}</span><span className="edit"><font color="black"><button>変更</button></font></span></div><br></br>
                    <hr></hr><br></br>

                    <div><span className="account-view">Atagonプライム会員　</span><span className="edit"><font color="black"><input type="checkbox" checked={atagon}></input></font></span></div><br></br>
                    <hr></hr><br></br>

                    <div><input type="submit" className="account-sub" value="確定"></input></div>
                    
                    <br></br>

                    
                </form>

            </div>
        <br></br>
        </div>

    );
}