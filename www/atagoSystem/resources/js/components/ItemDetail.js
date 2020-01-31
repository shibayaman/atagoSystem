import React from 'react';
import { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';

import Header from './main/header';

const ItemDetail = (props) => {
  const [item, setItem] = useState({});
  const [token, setToken] = useState(document.querySelector('meta[name="csrf-token"').getAttribute('content'));
  const [amount, setAmount] = useState(1);

  useEffect(() => {
    (async () => {
      const url = '/api/items/' + itemId;
      const res = await fetch(url);
      const data = await res.json();

      setItem(data);
    })();
  },[]);

  const handleAmountChange = (e) => {
    if(e.target.value > 0){
      setAmount(e.target.value);
    }
  }

  const detail = Object.keys(item).length ? (
    <div className="item-detail">
        <img src={item.item_url}/>
        <p>{item.item_name}</p>
        <p>{item.item_price}</p>
        <form action={'/purchase/cart'} method="post">
          <input type="hidden" name="_token" value={token} />
          <input type="hidden" name="item_number" value={item.item_number} />
          <input type="number" name="amount" value={amount} onChange={handleAmountChange} />
          <input type="submit" value="カートに入れる"/>
        </form>
      </div>
  ) : (
    <p>読み込み中...</p>
  );

  return(
    <div className="page">
      { detail }
    </div>
  )
}

export default ItemDetail;

if (document.getElementById('root')) {
  ReactDOM.render(<ItemDetail />, document.getElementById('root'));
}