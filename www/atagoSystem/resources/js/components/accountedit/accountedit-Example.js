import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "../common/commonHeader.js";
import Main from "./accountedit-main.js";


export default class Example extends Component {
    render() {
        return (
            <div>
                
                <Header />
                <Main />
                <div className="account-edit-title">マイページ</div>
        
            
            </div>
        );
    }
}

if (document.getElementById('accountedit-example')) {
    ReactDOM.render(<Example />, document.getElementById('accountedit-example'));
}