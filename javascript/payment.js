



function change()
{
    const payMent = document.getElementById('payment');
    document.getElementById('add-log').remove();
    payMent.innerHTML =`<div class="pay-log" id="pay-log">
    <div class="btn btn-pay">
        <fieldset >
        <legend style="width:230px;"><img src="./images/credit-card1.png"><p>Payment </p></legend>
        <div class="pay-set">
        <label>Enter card details</label>
        <input type="text" placeholder="card owner name"/>
        <input type="text" placeholder="card number">
        <div class="expire">
            <div class="expire1">
                <label>Exp Month</label>
                <select>
                    <option>Exp month</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="expire2">
                <label>Exp Year</label>
                <select>
                    <option>Exp year</option>
                    <option>2025</option>
                    <option>2026</option>
                    <option>2027</option>
                    <option>2028</option>
                    <option>2029</option>
                </select>
            </div>
        </div>
        <label>CVV</label>
        <input type="text" placeholder="cvv" style="width:60px;">
        
        <button class="save-con" onclick="paySuccess()">Pay</button>
       
         </div>
        </fieldset>
    </div>
 </div>
</div>`;
}


function paySuccess()
{
    const payMent = document.getElementById('payment');
    document.getElementById('pay-log').remove();
    payMent.innerHTML =`<div class="pay-success"><h1>Payment done successfully!!</h1></div>`;
}