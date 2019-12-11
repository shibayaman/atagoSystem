import React from 'react';
import ReactDOM from 'react-dom';
import { useState, useEffect } from 'react';
import Item from './cartResource/Item';

const Cart = () => {
  const [cart, setCart] = useState([]);
  const [token, setToken] = useState(document.querySelector('meta[name="csrf-token"').getAttribute('content'));

  useEffect(() => {
    (async () => {
      const url = '/purchase/api/cart';
      const res = await fetch(url);
      const data = await res.json();

      setCart(data);
    })();
  },[]);

  const updateAmount = (newItem) => {
    const newCart = cart.map(item => {
      return item.id === newItem.id ? Object.assign({}, item, newItem) : item;
    });

    setCart(newCart);
  }

  const itemList = cart.map(item => 
    <Item
      key={item.id}
      item={item}
      token={token}
      updateAmount={updateAmount}/>
    );

  return(
    <div className="cart">
      {itemList}
    </div>
  );
}

export default Cart;

if (document.getElementById('root')) {
  ReactDOM.render(<Cart />, document.getElementById('root'));
}
