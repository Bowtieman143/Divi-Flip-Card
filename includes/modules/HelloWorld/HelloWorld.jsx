// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class SimpleHeader extends Component {

  static slug = 'simp_simple_header';

  render() {
    return (
      <Fragment>
        <div class="od_flip-card">
          <div class="od_flip-card-inner">
            <div class="od_flip-card-front">
              <img src={this.props.header_image} alt="Avatar" />
            </div>
            <div class="od_flip-card-back">
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