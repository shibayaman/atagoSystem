import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "../common/commonHeader.js";
import Main from "./editdecision-main.js";


export default class Example extends Component {
    render() {
        return (
            <div>
                
                <Header />
                <Main />
                <div className="editdecision-title">アカウント情報変更</div>
                
            
            </div>
        );
    }
}

if (document.getElementById('editdecision-example')) {
    ReactDOM.render(<Example />, document.getElementById('editdecision-example'));
}