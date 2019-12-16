import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "../common/commonHeader.js";
import Main from "./accountresister-main.js";
import Footer from "../common/commonFooter.js";

export default class Example extends Component {
    render() {
        return (
            <div>
                
                <Header />
                <Main />
                <div className="account-resister-title">アカウント登録画面</div>
                <Footer />
            
            </div>
        );
    }
}

if (document.getElementById('accountresister-example')) {
    ReactDOM.render(<Example />, document.getElementById('accountresister-example'));
}