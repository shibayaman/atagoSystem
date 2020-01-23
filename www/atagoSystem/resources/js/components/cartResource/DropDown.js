import React from 'react';
import { useState, useEffect } from 'react';

const DropDown = (props) => {
  return(
    <div>
      <select className="item-amount" value={props.amount} onChange={e => props.updateAmount(parseInt(e.target.value))}>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
  );
}

export default DropDown;