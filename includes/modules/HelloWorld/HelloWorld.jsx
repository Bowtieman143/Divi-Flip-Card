// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class SimpleHeader extends Component {

  static slug = 'simp_simple_header';

  render() {
    return (
      <Fragment>
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src={this.props.header_image} alt="Avatar" style={{width:"300px",height:"300px"}} />
            </div>
            <div class="flip-card-back">
              <h1>{this.props.heading}</h1> 
              <p>{this.props.content()}</p>
            </div>
          </div>
        </div>
      </Fragment>
    );
  }
}

export default SimpleHeader;