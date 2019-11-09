// reactパッケージのインストール //
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// 外部のjsファイルをインポート //
import ButtonAdd from "./test.js";

// デフォルトインポートの場合、指定したファイル内のデフォルトエクスポートを読み込んでくれる//
import a from "./header.js";    // デフォルトインポート 変数名は何でも良い(この例ではaとしている))//

// 名前付きインポートの場合、変数名は指定したファイル内の変数名と一致させ、{}で囲む //
// この例ではheader.js内の変数bを読み込んでいる //
import {b} from "./header.js";  // 名前付きエクスポート(named exportという) //

export default class Example extends Component {

    //render()メソッドはC#のupdate()メソッドに相当する//
    render() {
        return (
            //return内にコードを書く//
            <div>
            {/* 一部品ごとに一つのdivタグが必要 */}
            
                <div>
                    <p><h1>default　import is . {a}</h1></p>
                    <p><h1>named import (b) is . {b}</h1></p>
                </div>
                <div>
                    { /* インポートしたtest.jsないの関数を使用 */ }
                    <ButtonAdd />
                </div>

                {/* jsのコードは{}で囲む必要がある、つまり、このコメント文はjsのコメント文である */}
                <div>
                    <button className="bt" onClick={
                        function(){
                            alert("Hello");
                        }
                    }>oui</button>
                </div>>

                <div>
                    <button className="bt" onClick={
                    function(){
                        alert("asasas");
                    }
                    }>あいu</button>
                </div>
            
            
                
            </div>
        );
    }
}

// welcome.blade.php内にexampleというタグがある場合、 //
if (document.getElementById('example')) {
    // Exampleクラスを実行する //
    ReactDOM.render(<Example />, document.getElementById('example'));

}
