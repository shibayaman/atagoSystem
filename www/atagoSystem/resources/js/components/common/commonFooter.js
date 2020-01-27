

import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class commonFooter extends Component {
    render() {
        return (
            <div>

            <footer className="common-footer">

                <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
            
            </footer>
        
        </div>
        );
    }
}

if (document.getElementById('commonFooter')) {
    ReactDOM.render(<commonFooter />, document.getElementById('commonFooter'));
}