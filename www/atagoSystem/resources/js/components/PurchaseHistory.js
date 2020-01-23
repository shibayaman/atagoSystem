import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class PurchaseHistory extends Component {
    constructor(props) {
        super(props);
        this.state = {
            data: [
                {
                    orderCode: 1,
                    itemNumber: 1,
                    quantity: 3,
                    cancel: false,
                    itemName: 'I have a pen',
                    itemUrl: 'https://m.media-amazon.com/images/I/819QG4ykT3L._AC_UL320_ML3_.jpg',
                    itemPrice: 1000,

                },
                {
                    orderCode: 1,
                    itemNumber: 5,
                    quantity: 1,
                    cancel: false,
                    itemName: 'I am a pinapple',
                    itemUrl: 'https://m.media-amazon.com/images/I/41L-xh6KOCL._AC_UL320_ML3_.jpg',
                    itemPrice: 1500,
                },
                {
                    orderCode: 1,
                    itemNumber: 8,
                    quantity: 2,
                    cancel: true,
                    itemName: 'abe',
                    itemUrl: 'https://m.media-amazon.com/images/I/A1K8vyFGPYL._AC_UL320_ML3_.jpg',
                    itemPrice: 5000,
                }
            ],
            order: [
                {
                    orderCode: 1,
                    claCode: "649-3633",
                    orderDay: "2019年11月2日",
                    siharai: 1,
                    souryou: 500,
                    haitatu: 2,
                    total: 14500,
                }

            ]
        }
    }
    render() {
        const itemyen = this.state.data.map(i=>{
            return(
                <dev>
                    {i.quantity * i.itemPrice}
                </dev>
            )
        })
        const souryouyen = this.state.data.map(i=>{
            return(
                <dev>

                </dev>
            )
        })
        const itemdeta = this.state.data.map(i=>{
           return(
            <div>
                <a className="sample">
                    <img src={i.itemUrl}></img>
                </a>
                <table className="table_purchase_history">
                    <tr>
                        <th width="200">商品名</th>
                        <th width="50">個数</th>
                        <th width="100">単価</th>
                        <th rowspan="2" className = "red">
                        {
                            (() => {
                                if(i.cancel){
                                    return"キャンセル済み";
                                }
                            }).call(this)
                        }
                        </th>
                    </tr>
                    <tr　align="center">
                        <td>{i.itemName}</td>
                        <td>{i.quantity}個</td>
                        <td>{i.itemPrice}円</td>
                    </tr>
                </table>
            </div>
           )
        })

        return (
            <div className="foo">
                <h1>購入履歴</h1>
                <p className="sample3">
                    <table>
                        <tr>
                            <th width="200">注文日</th>
                            <th width="200">配達先住所</th>
                            <th width="200">お支払い方法</th>
                            <th width="200">金額詳細</th>
                            <th width="200">配達状況</th>
                        </tr>
                        <tr align="center">
                            <td>{this.state.order[0].orderDay}</td>
                            <td>{this.state.order[0].claCode}</td>
                            <td>
                                {
                                    (() => {
                                        switch(this.state.order[0].siharai) {
                                            case 1:
                                                return "代引き";
                                                break;
                                            case 2:
                                                return "クレジット払い";
                                                break;
                                            case 3:
                                                return "コンビニ払い";
                                                break;
                                        }
                                    }).call(this)
                                }
                            </td>
                            <td align="right">{this.state.order[0].total}円</td>
                            <td>
                                {
                                    (() => {
                                        switch(this.state.order[0].haitatu) {
                                            case 1:
                                                return "発送準備中";
                                                break;
                                            case 2:
                                                return "発送済み";
                                                break;
                                            case 3:
                                                return "配達済み";
                                                break;
                                        }
                                    }).call(this)
                                }
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right">{this.state.order[0].souryou}円</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td align="right">
                                {
                                    (() => {
                                        switch(this.state.order[0].siharai) {
                                            case 1:
                                                return 500;
                                                break;
                                            default:
                                                break;
                                        }
                                    }).call(this)
                                }円
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <th>合計金額</th>
                            <td align="right">{this.state.order[0].total + this.state.order[0].souryou + 500}円</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </p>
                <p className="sample3">{itemdeta}</p>
            </div>
        );
    }
}

if (document.getElementById('root')) {
    console.log('hello');
    ReactDOM.render(<PurchaseHistory />, document.getElementById('root'));
}
