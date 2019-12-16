import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from "./header.js";

export default class Main extends Component {
    render() {
        return (
            <div><Header />
            <div><p>sdxdd</p></div>
            </div>
        );
    }
}

if (document.getElementById('main')) {
    ReactDOM.render(<Main />, document.getElementById('main'));
}