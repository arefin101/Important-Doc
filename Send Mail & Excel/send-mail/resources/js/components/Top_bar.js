import React, { Component } from 'react';

import './style.css';

export default class Top_bar extends Component {
    render() {
        return (

        <div className="topbar-brand">
            <div className="container">
                <div className="row">
                        <div className="col-md-4">
                            <div className="brand-left">
                                <a href="#"><img src="img/ads.jpg" alt=""/></a>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="brand-middle">
                                <a href="#" className="brand"><span className="news">News</span>paper</a>
                            </div>
                        </div>
                        <div className="col-md-4">
                            <div className="brand-right">
                                <a href="#"><img src="img/ads.jpg" alt=""/></a>
                            </div>
                        </div>
               
            </div>
        </div>
        </div>
            );
        }
    }           