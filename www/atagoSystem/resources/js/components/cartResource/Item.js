import React from 'react';
import { useState, useEffect } from 'react';
import DropDown from './DropDown';

const Item = (props) => {
  const updateAmount = async (val) => {
    const body = JSON.stringify({
      id: props.cart.item.item_number,
      amount: val
    });

    const headers = {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      "X-CSRF-TOKEN": props.token
    }

    const res = await fetch('/purchase/api/cart', {
      method: 'POST',
      headers,
      body
    });

    const data = await res.json();
    props.updateAmount(data);
  }

  return (
    <div className="item">
      <div className="item-img-container">
        <img src={props.cart.item.item_url}/>
      </div>
      <div className="item-desc-container">
        <p className="item-name">{props.cart.item.item_name}</p>
        <p className="item-price">{props.cart.item.item_price}</p>
        <DropDown amount={props.cart.amount} updateAmount={updateAmount}/>
      </div>
    </div>
  )
}

export default Item;