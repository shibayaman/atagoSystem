import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "../common/commonHeader.js";
import Main from "./complete-main.js";
import Footer from "../common/commonFooter.js";

export default class Example extends Component {
    render() {
        return (
            <div>
                
                <Header />
                <div className="complete-title">登録完了画面</div>
                <Main />
                <Footer />
            
            </div>
        );
    }
}

if (document.getElementById('complete-example')) {
    ReactDOM.render(<Example />, document.getElementById('complete-example'));
}