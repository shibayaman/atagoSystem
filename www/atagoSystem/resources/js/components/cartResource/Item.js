import React from 'react';
import { useState, useEffect } from 'react';
import DropDown from './DropDown';

const Item = (props) => {
  const updateAmount = async (val) => {
    const body = JSON.stringify({
      id: props.item.id,
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
        <img src={props.item.product.ITEM_URL}/>
      </div>
      <div className="item-desc-container">
        <p className="item-name">{props.item.product.ITEM_NAME}</p>
        <p className="item-price">¥ 1,000</p>
        <DropDown amount={props.item.amount} updateAmount={updateAmount}/>
      </div>
    </div>
  )
}

export default Item;