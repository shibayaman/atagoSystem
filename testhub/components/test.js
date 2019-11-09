import React, { Component } from 'react';
import ReactDOM from 'react-dom';

//ボタンを追加する関数//
export default function ButtonAdd() {

    
    return (
        
        <div>

            
            <button className="bt" onClick={
                function(){
                    alert("テスト");
                }
            }>テスト
            </button>
            

            
        </div>
    );
    


}