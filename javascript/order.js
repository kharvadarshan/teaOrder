

function qnDec(id)
{
  var temp = Number (document.querySelector('.'+id).value);
  if(temp>0)
    temp--;
  console.log(temp);
  document.querySelector('.'+id).value= temp;
}

function qnInc(id)
{
  var temp = Number (document.querySelector('.'+id).value);
    temp++;
  console.log(temp);
  document.querySelector('.'+id).value = temp;
}


















// var x=1;
// function addItem(){
//   var itemName = document.querySelector(".select-item").innerText;
//   var price=document.querySelector(".select-item").value;
//   var itemQuantity = document.querySelector(".select-quan").value;

//    document.querySelector(".my-items").innerHTML += `
     
//    <div class="item item${x}">
//       <div class="n">${itemName}</div>
//       <div class="p">${itemQuantity}</div>
//       <div class"t">${itemQuantity*price}</div>
//    </div>`;
//    x++;
// }

















// const teaArray=["Regular Tea","Masala Tea","Phudina Tea","Ginger Tea","Green Tea","Herble Tea"];
// const priceArray=[10,15,17,20,25,30];


// var item=1;
// var total=0;
// function add()
// {
//   const x =document.getElementById(ids).innerText;
//   const y = document.getElementById(ids).parentElement.nextElementSibling;
//   const price =y.firstElementChild.firstChild.nextSibling.textContent;

//   var index1 = Number(document.querySelector(".select-item").value);
//   var itemName=teaArray[index1];
//   var price=priceArray[index1];
//   var itemQuantity = document.querySelector(".select-quan").value;
//   const myOrder=document.getElementById('myOrders');
// console.log(itemName,price);

  // myOrder.innerHTML +=`<div class="order-details" >
                            
  //                           <div class="same1" name="items" >${itemName}</div>
  //                               <div class="same2">
  //                                    <div class="qt-val" name="quantities">${itemQuantity}</div>
  //                               </div>
  //                           <div class="same3" name="subTotal"><div><img src="./images/rupee-indian.png"></div>${price*itemQuantity}</div>
  //                          </div>
  //                       </div>`;
  //  const totalAmount =document.getElementById('totalAmount');
  //    total +=(price*itemQuantity); 
  //   totalAmount.innerHTML =`<img src="./images/rupee-indian.png">${total}`;
  // item++;
// }
//var item=1;
///function add(ids)
//{
//   const x =document.getElementById(ids).innerText;
//   const y = document.getElementById(ids).parentElement.nextElementSibling;
//   const price =y.firstElementChild.firstChild.nextSibling.textContent;
// var itemName = document.querySelector(".select-item").innerText;
//  var price=document.querySelector(".select-item").value;
//   var itemQuantity = document.querySelector(".select-quan").value;
//   const myOrder=document.getElementById('myOrders');

//   myOrder.innerHTML +=`<div class="order-details" >
                            
//                             <div class="same1" name="items" >${itemName}</div>
//                                 <div class="same2">
//                                      <div class="qt-val" name="quantities">${itemQuantity}</div>
//                                 </div>
//                             <div class="same3" name="subTotal"><div><img src="./images/rupee-indian.png"></div>${price*itemQuantity}</div>
//                            </div>
//                         </div>`;
//   item++;
//}




// function valInc(ids){
//   const temp= document.getElementById(ids).parentElement;
//   var  val = temp.previousElementSibling.innerText;
//   temp.previousElementSibling.innerText = ++val;
//   var changePrice =Number(temp.parentElement.parentElement.nextElementSibling.innerText);
   
//   // var itemTotal = Number(temp.parentElement.parentElement.nextElementSibling.innerText );
//   let teaPrice=Number(document.getElementById(ids).value); 
//   temp.parentElement.parentElement.nextElementSibling.innerHTML = 
//   `<div class="same3"><img src="./images/rupee-indian.png">${changePrice+teaPrice}</div>`;
//   console.log(changePrice);
//   const totalAmount =document.getElementById('totalAmount');
//   total +=teaPrice; 
// totalAmount.innerHTML =`<img src="./images/rupee-indian.png">${total}`;
  
// };

// function valDec(ids){
// const temp= document.getElementById(ids).parentElement.nextElementSibling;
//   var val=temp.innerText;
//   if(val>1)
//   temp.innerText = --val;
//   const changePrice= Number(document.getElementById(ids).parentElement.parentElement.parentElement.nextElementSibling.innerText);
//   let teaPrice=Number(document.getElementById(ids).value);
//   if(changePrice>teaPrice){
//   document.getElementById(ids).parentElement.parentElement.parentElement.nextElementSibling.innerHTML=
//   `<div class="same3"><img src="./images/rupee-indian.png">${changePrice-teaPrice}</div>`;;
//   total -=teaPrice; }
//   const totalAmount =document.getElementById('totalAmount');
  
// totalAmount.innerHTML =`<img src="./images/rupee-indian.png">${total}`;
// }


// function change(){
//   location.href="./payment/payment.html";
// }