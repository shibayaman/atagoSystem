import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "../common/commonHeader.js";
import Main from "./accountresister-main.js";


export default class Example extends Component {

    constructor(props){
        super(props);
        this.state = {
            usename: 'fgtj'
        };

        this.handleChange = this.handleChange.bind(this);
        

    }

    handleChange(event) {
        this.setState({usename:event.target.value});

    }

    render() {
        return (
            <div>
                
                <Header />
                <Main />
                <div className="account-resister-title">アカウント登録画面</div>
                
            
            </div>
        );
    }
}

if (document.getElementById('accountresister-example')) {
    ReactDOM.render(<Example />, document.getElementById('accountresister-example'));
}