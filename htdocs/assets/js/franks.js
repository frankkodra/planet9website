
function switchView(ele1,ele2,display){
  document.getElementById(ele1).style.display="none";
  document.getElementById(ele2).style.display=display;
}
Array.from(document.getElementsByClassName("frank-popup")).forEach(element => {
    element.style.display = "none";
    element.innerHTML+=`	<div style="position:absolute;top:0;left:3%;width:150px;height:70px;z-index:5;
    " class="d-flex flex-row">
       <a onclick="closePopup();" class="back-arrow h-100 w-40 d-flex justify-content-center align-items-center"><i style="font-size:xxx-large;" class="fas fa-arrow-left h-60 w-100"></i></a>
                <span class="back-text h-100 w-60" style="font-size:xxx-large;">Back</span>
    </div>   `
  });
  function logIn(){
     var loginData = new formData( document.getElementById('login-form'))
     fetch('login.php', {
      method: 'POST',
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        // Handle the response from the PHP script
        console.log(data);
        if(data.toLocaleLowerCase().includes("fail") ){

        }
        // You can update the UI or perform any other actions based on the response
      })
      .catch(error => {
        // Handle any errors that occurred during the request
        console.error('Error:', error);
      });
 

}
function popup(popupId) {
    // Create a new div element for the overlay
    const overlay = document.createElement('div');
    overlay.id ="popup"
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    overlay.style.display = 'flex';
    overlay.style.alignItems = 'center';
    overlay.style.justifyContent = 'center';
    overlay.style.zIndex = '9999';
  
    // Get the popup content element by its ID
    const popupContent = document.getElementById(popupId);
  
    // Set the popup content styles
    popupContent.style.position = 'relative';
    popupContent.style.zIndex = '10000';
  
    // Append the popup content to the overlay
    overlay.appendChild(popupContent);
   popupContent.style.display = 'flex'
    // Append the overlay to the document body
    document.body.appendChild(overlay);
  
    // Add a click event listener to the overlay to close the popup
    overlay.addEventListener('click', function(event) {
      if (event.target === overlay) {
        closePopup();
      }
    });
  }
  
  function closePopup() {
    // Remove the overlay from the document body
    var popup =  document.getElementById('popup');
    var content = popup.children[0]
    content.style.display = 'none'
    document.body.appendChild(content);
    document.body.removeChild(popup)
  }
  function changeDisplay(el,d){
    console.log("running chanmge display");
    document.getElementById(el).style.display= d;
  }
function addPaymentMethod(){
    const cardNumber = document.getElementById('CardNumber');
    const cardName = document.getElementById('CardName');
    const ccv = document.getElementById('CCV');
    const expDate = document.getElementById('expDate');
    const addCardButton = document.querySelector('#addPaymentOption button');
    
    // Add event listener to the "Add Card" button
   
    
      // Create an object with the form data
      const formData = new FormData();
      formData.append('cardNumber', cardNumber.value);
      formData.append('cardName', cardName.value);
      formData.append('ccv', ccv.value);
      formData.append('expDate', expDate.value);
      // Send the form data to the PHP script using fetch
      fetch('includes\\addPayment.php', {
        method: 'POST',
      
        body: formData
      })
        .then(response => response.text())
        .then(data => {
          // Handle the response from the PHP script
          console.log(data);
          // You can update the UI or perform any other actions based on the response
          
          // Reset the form fields
          cardNumber.value = '';
          cardName.value = '';
          ccv.value = '';
          expDate.value = '';
        })
        .catch(error => {
          // Handle any errors that occurred during the request
          console.error('Error:', error);
        });
  closePopup();
}
function addAddress(){
  const country = document.getElementById('countries');
  var state = document.getElementById('states');
  var streetAddress = document.getElementById('streetAddress');
  var city = document.getElementById('city');
  var zipCode = document.getElementById('zip');
   var name = document.getElementById('addyName');

  var address = streetAddress.value+", "+city.value+", "+state.value+', '+ country.value+", "+zipCode.value;
  country.value = ""; 
   state.value = "";
   streetAddress.value = "";
   city.value = "";
   zipCode.value = "";
  const formData = new FormData();
  formData.append('address',address);
  formData.append('name',name.value);

  fetch('includes\\addAddress.php',{
    method:"POST",
    body:formData
  }).then(response=>response.text()).then(data=>{
    console.log(data); 

  }).catch(error=>{
    console.log(error);
  })  
     if(data =="succefully added address"){ 
      closePopup();
      document.getElementById('addresses').innerHTML+=
    `   <li id="${address+name.value}" class="list-group-item d-flex justify-content-between align-items-center">
    <div class="w-60 d-flex  flex-column flex-lg-row flex-sm-column flex-md-row text-center align-items-center">
   <div class="w-50 text-center" > ${address}</div>
   <div class="w-50 text-center">${name.value} </div>
  </div>
    <div class="d-flex flex-row  justify-content-around w-40">
      <button class="btn btn-sm btn-primary w-40" data-toggle="modal" data-target="#editAddressModal">Edit</button>
      <button class="btn btn-sm btn-danger w-40 onclick="deleteAddress(${address+name.value})">Delete</button>
    </div>
  </li>`;

    }

  

}
function deleteAddress(){
  
}
class QuantityCounter extends HTMLElement {

  constructor() {
    console.log("element rendering");
    super();
    this.style.display = "block";
    this.attachShadow({ mode: 'open' });
    this.step = parseInt(this.getAttribute('step') || '1');
    this.min = parseInt(this.getAttribute('min') || '0');
    this.max = parseInt(this.getAttribute('max') || '1000000');
    this.onincrement = this.getAttribute('onincrement') || '';
    this.ondecrement = this.getAttribute('ondecrement') || '';
    this.onchange = this.getAttribute('onchange') || '';
    this.delay = parseInt(this.getAttribute('delay') || '500');
  
    this.render();
  }
  setCounter(quantity){
    this.counterInput.value = quantity;
  }
  render() {
    this.shadowRoot.innerHTML = `
      <style>
        .d-flex {
          display: flex;
        }
        .w-30 {
          width: 30%;
        }
        .w-40 {
          width: 40%;
        }
        .w-100{
          width:100%;
        }
        .h-100{
          height:100%;
        }
        .text-center {
          text-align: center;
        }
        
        .btn-outline-secondary {
          color: #6c757d;
          background-color: transparent;
          border-color: #6c757d;
        }
        .frank-form-control {
          display: block;

          font-size: 1rem;
          line-height: 1.5;
          color: #495057;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #ced4da;
          border-radius: 0.25rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn {
          font-weight: bold;
          border: none;
          background-color: #e81ecd;
          border-radius: 1rem;
          color: #ffffff;
          font-size: 20px;
          box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.13);
          transition: all 0.3s;
      }
      .mx-3{
        margin-left:3%;
        margin-right:3%;
      }
      </style>
      <div class="d-flex h-100">
      <div class="w-30 mx-3 h-100">
      <button class="btn btn-outline-secondary w-100 decrement-btn h-100" onclick="${this.ondecrement}">-</button>
    </div>
    <input type="number" id="counter" class="w-40 frank-form-control text-center" value="0" readonly>
    <div class="w-30 mx-3 h-100">
      <button class="btn btn-outline-secondary w-100 h-100 increment-btn" onclick="${this.onincrement}">+</button>
    </div>
      </div>
    `;

    this.decrementBtn = this.shadowRoot.querySelector('.decrement-btn');
    this.incrementBtn = this.shadowRoot.querySelector('.increment-btn');
    this.counterInput = this.shadowRoot.querySelector('input');
    this.decrementBtn.addEventListener('click', this.decrementQuantity.bind(this));
    this.incrementBtn.addEventListener('click', this.incrementQuantity.bind(this));

  
  }
  getValue(){
    return this.counterInput.value();
  }

  decrementQuantity() {
    let currentValue = parseInt(this.counterInput.value);
    if (currentValue > this.min) {
      this.counterInput.value = Math.max(currentValue - this.step, this.min);
    }
    
  }

  incrementQuantity() {
    let currentValue = parseInt(this.counterInput.value);
    if (currentValue < this.max) {
      this.counterInput.value = Math.min(currentValue + this.step, this.max);
    }
  }
    

}

customElements.define('quantity-counter', QuantityCounter);

class ProductCounter extends HTMLElement {
  
  
    static ProductCounters ={};
  constructor() {
    super();
  
    this.productName = this.getAttribute('product');
    this.wholesaleIncrement = parseInt(this.getAttribute('increment'), 10);
    this.wholesaleMinimum = parseInt(this.getAttribute('min'), 10);
    this.buttonHeight = this.getAttribute("btnHeight");
    this.buttonWidth = this.getAttribute("btnWidth");
    var retailExist = "d-none";
    
    if (!(this.productName in ProductCounter.ProductCounters)) {
      ProductCounter.ProductCounters[this.productName] = [];
    }
    ProductCounter.ProductCounters[this.productName].push(this);
    
    var addToCartExist = "d-none";
    var wholesaleExist = 'd-none';
   if(shoppingCart!=null){

   
if(this.productName in shoppingCart){
      retailExist = 'd-flex';
      if(wholesale){
        wholesaleExist = "d-flex"
      }
    }
    else{
      retailExist = 'd-none'
    }


    if(this.productName+"-wholesale" in shoppingCart){
      retailExist = 'd-flex';
      wholesaleExist = "d-flex"
    }
    else{
  }
  }  if(retailExist=="d-none"){
    addToCartExist='d-block';
  }  
  else{
    addToCartExist ="d-none"; 
  }

  const heightClass = Array.from(this.classList).find(cls => cls.startsWith('h-'));
  const widthClass = Array.from(this.classList).find(cls => cls.startsWith('w-'));

  // Extract the height and width values from the classes
  const heightValue = heightClass ? heightClass.replace('h-', '') : null;
  const widthValue = widthClass ? widthClass.replace('w-', '') : null;
    // Create a shadow root
   this.attachShadow({ mode: 'open' });

    // Set the HTML content directly to the shadow root
    this.shadowRoot.innerHTML = `
    <style>


    
    .btn {
      font-weight: bold;
      border: none;
                            
      background-color: #e81ecd;
 
      color: #ffffff;
      font-size: 20px;
      box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.13);
      transition: all 0.3s;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/franks.css">
  <div class="d-flex align-items-center justify-content-center align-items-center flex-sm-column flex-column w-100" >
  <button style="      border-radius: 1rem;    color: #ffffff; background-color: #e81ecd;" class="btn ${addToCartExist} h-100" onclick="ProductCounter.addToCart('${this.productName}',1)">Add to Cart</button>
<div id="retail" class=" ${retailExist} h-50  flex-row justify-content-center 500mg-brownie align-items-center w-100 ">
<h4 id="WL" class="${wholesaleExist} w-50">retail:</h1>
      <quantity-counter id="rc" class="h-100 w-70" onincrement="ProductCounter.addToCart('${this.productName}',1)" ondecrement="ProductCounter.removeFromCart('${this.productName}',1)" ></quantity-counter>
</div>

<div id="wholesale" class="mt-5 h-50 ${wholesaleExist} flex-row justify-content-center 500mg-brownie-wholesale align-items-center w-100">
  <h4 class=" w-50 ">wholesale:</h1>
<quantity-counter class="h-100 w-70" id="wc" min="${this.wholesaleMinimum}" step="${this.wholesaleIncrement}" onincrement="ProductCounter.addToCart('${this.productName}-wholesale',1)" ondecrement="ProductCounter.removeFromCart('${this.productName}-wholesale',1)"  ></quantity-counter>
                   </div>
</div>
    `;
    console.log(this.productName+ " counter is being madew");
    // Get references to the elements

    this.addToCartButton = this.shadowRoot.querySelector('.btn');
    this.retailDiv = this.shadowRoot.querySelector('#retail');
    this.wholesaleDiv = this.shadowRoot.querySelector('#wholesale');
    this.WL = this.shadowRoot.querySelector("#WL");
 this.addToCartButton.style.width =this.buttonWidth;
 this.addToCartButton.style.height=this.buttonHeight;
    this.wholesaleCounter = this.shadowRoot.querySelector("#wc");
    this.retailCounter =    this.shadowRoot.querySelector("#rc");
    console.log("retail counter: "+this.retailCounter)
    try{
        this.retailCounter.setCounter(shoppingCart[this.productName].quantity);
    }catch(e)
    {
      console.log(e);
    }
    try{
                  this.wholesaleCounter.setCounter(shoppingCart[this.productName+"-wholesale"].quantity);
          }catch(e)
          {
            console.log(e);
          }
 


  }

  static updateCartCount() {
    let c = 0;
    console.log("updating count for cart");
    console.log(shoppingCart);
    for (var p in shoppingCart) {
      c += shoppingCart[p].quantity;
      console.log(shoppingCart[p].quantity);
    }
    document.getElementById("cart-count").innerHTML = c;
  }
  resetCounter(){
    this.wholesaleDiv.style.display = 'none';
    this.retailDiv.style.display = 'none';
    this.addToCartButton.style.display="block";
    this.retailCounter.setCounter(0);
    this.wholesaleCounter.setCounter(0);
  }

   static async addToCart(PN, qId) {
    const url = 'includes/addToCart.php';
      console.log("ADDING TO CART product name: "+PN+" quantity to add: "+qId);
    if (!(qId > 0)) {
        qId = document.getElementById(qId).getValue();
    }
    // Prepare the data to send (you can add more parameters if needed)
    const data = {
        productName: PN,
        Quantity: qId,
  
    };
    
    var succ = false;
    console.log(data.Quantity)
    // Make the POST request using $.post()
  await  $.post(url, data)
        .done(function (response) {
            // Handle the successful response 
            console.log('Data sent successfully:', response);   
            
           

            if (response == 1) {
              succ = true;
          
              ProductCounter.updateShoppingCart(PN,qId);
              ProductCounter.updateCounters(PN);
              ProductCounter.updateCartCount();
             // ProductCounter.updateCart(PN)
              CartPage.updateCartPages(PN);
            }

            else {
                console.log(response);
                succ= false;
           
            }

         
        }
        )
        .fail(function (xhr) {
            // Handle errors (e.g., network issues, server errors)
            succ = false;
            console.error('Error sending data:', xhr);
         
        });
       
        //console.log(comp);
       return succ;
      
}
// static LOADCART(){
//   console.log("loading cart: "+shoppingCart);
//   for( var pn in shoppingCart){
//     this.updateCart(pn);
//   }
//   if(shoppingCart.length==0){
//     document.getElementById("cart").innerText="nothing in cart";
//   }
//}
// static updateCart(PN){
//   console.log("updating cart:::"+PN)
//   // if(shoppingCart.length ==0){
//   //
//   // }else{
 
//   // }
//    console.log("setting cart counter "+PN);
//    console.log("shopping cart::"+shoppingCart)
//    console.log(shoppingCart)
// if(!(PN in shoppingCart)){
// try{
//   console.log("removing item from cart"+PN);
//   document.getElementById("cart-"+PN).remove() 

// }
// catch(e){
//   console.log(e)
// } 
//  return;
// }

//   var price;
//   if(PN.includes("wholesale")){
//     console.log(PN);
//     price = productPricing[PN.replaceAll("-wholesale","")].WholesalePrice;

//   }else{
//     price = productPricing[PN].RetailPrice;
//   }

//   if(document.getElementById("cart-"+PN)!=null){
 
//     document.getElementById("cartCounter-"+PN).setCounter(shoppingCart[PN].quantity);
//     document.getElementById("item-price-"+PN).innerHTML = `Price: $${shoppingCart[PN].quantity * price}`;

//   }else{
            
//             let cartitem = document.createElement('div');

//             cartitem.id ="cart-"+PN
//             cartitem.innerHTML=` <div 
//             style="padding: 10px;
//             font-family: var(--bs-font-sans-serif);
//             font-size: 1rem;
//             font-weight: 600;
//             line-height: 1.5;
//             color: #212529;
//             cursor: default;
//             background: white" 
//             class="d-flex flex-row align-items-center" >
//                 <span class="item-name w-40" style="">${PN}</span>
//                  <quantity-counter class="w-40" id="cartCounter-${PN}" onincrement="ProductCounter.addToCart('${PN}',1)" ondecrement="ProductCounter.removeFromCart('${PN}',1)"></quantity-counter>
//                 <span class="item-price w-10" id="item-price-${PN}" style="">Price: $${shoppingCart[PN].quantity * price}</span>
//             </div>`
//         document.getElementById('cart').appendChild(cartitem);
        
//   var x = document.querySelector("#cartCounter-"+PN)
//   console.log(shoppingCart);
//   console.log("adding element to cart")
//   x.setCounter(shoppingCart[PN].quantity);

// }

//}
static updateCounters(PN){
console.log("update counters");
  if(PN in shoppingCart){
     
     if (PN.includes('wholesale', "")) {

    this.ProductCounters[PN.replaceAll('-wholesale', '')].forEach(counter => {
      counter.wholesaleCounter.setCounter(shoppingCart[PN].quantity);
      counter.retailDiv.style.display="flex"
      counter.wholesaleDiv.style.display="flex"
      counter.addToCartButton.style.display ="none"
    });
  }
  else {
    this.ProductCounters[PN].forEach(counter => {
      counter.retailCounter.setCounter(shoppingCart[PN].quantity);
      counter.retailDiv.style.display="flex"
      counter.addToCartButton.style.display ="none";
      //console.log("runniong the code change the display");
      if(wholesale){
        counter.wholesaleDiv.style.display="flex"
     counter.WL.style.display="block";
      }   

    });
  }
  return;
  }
  console.log("updatecounters: "+PN)
  console.log(shoppingCart);
    if (PN.includes('wholesale', "")&&PN.replaceAll('-wholesale',"") in shoppingCart) {
           this.ProductCounters[PN.replaceAll("-wholesale","")].forEach(counter => {
        counter.wholesaleCounter.setCounter(0);
      });
    }
    else if(PN+"-wholesale" in shoppingCart)
     {
         this.ProductCounters[PN.replaceAll("-wholesale","")].forEach(counter => {
          counter.retailCounter.setCounter(0);
      });
      }
      else{
        this.ProductCounters[PN.replaceAll("-wholesale","")].forEach(counter => {
          counter.resetCounter();
        });
      }

   

    
  }




static updateShoppingCart(PN,Q){
  console.log("updating shoppingcart var before:")
  console.log(shoppingCart)
  if(Q=="removeall"){
    delete shoppingCart[PN];
  }
  if(PN in shoppingCart){
    shoppingCart[PN].quantity +=Q;
    if( shoppingCart[PN].quantity<=0)
      delete shoppingCart[PN];
      console.log("updating shoppingcart var after:")
  console.log(shoppingCart)
    return;
  }    
  var pid;
  shoppingCart[PN]={};
  if(PN.includes("wholesale")){
    pid = PN.replaceAll("-wholesale","");
    console.log(pid);
    shoppingCart[PN].price = productPricing[pid].WholesalePrice;

  }
  else{

    shoppingCart[PN].price = productPricing[PN].RetailPrice;
  }    
  shoppingCart[PN].quantity=Q;
  console.log("updating shoppingcart var after:")
  console.log(shoppingCart)
}



static async removeFromCart(productName,quantityToRemove){
  console.log("removing from cart is runnig product: "+productName+" quanitity to rmeove: "+quantityToRemove);
  const url = 'includes/removeFromCart.php';
  const data = {
      productName: productName,
      QuantityToRemove: quantityToRemove,
      
  };
  console.log("removing: "+productName)
  // Make the POST request using $.post()
    await $.post(url, data)
      .done(function (response) {
          // Handle the successful response    

       console.log("remove from cart response form server: "+response);

       

              if(quantityToRemove<0){

              }
              else{
                quantityToRemove=quantityToRemove*-1
              }
          ProductCounter.updateShoppingCart(productName,quantityToRemove);
          ProductCounter.updateCounters(productName);
      
          ProductCounter.updateCartCount();
         // ProductCounter.updateCart(productName);  
            CartPage.updateCartPages(productName)
              }
      )
      .fail(function (xhr) {
          // Handle errors (e.g., network issues, server errors)
          console.error('Error sending data:', xhr);
      });
}
}
ProductCounter.updateCartCount();
//ProductCounter.LOADCART();
// Define the custom element
customElements.define('product-counter', ProductCounter);
//b ProductCounter.LOADCART();

class ProductCard extends HTMLElement {
  constructor() {
    super();
    console.log("product card working " + this, this.getAttribute("product"));
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
      <style>
        .frank-card {
         
        
        h3 {
          text-align: center;
        }
        
        img {
          max-width: 100%;
          height: auto;
        }
        
        .product-details {
          display: flex;
          flex-direction: column;
          align-items: center;
          margin-top: 1rem;
          margin-bottom: 1rem;
          height: 30%;
          width: 100%;
        }
        
        .btn {
          width: 75%;
          height: 45px;
          margin-top: 1.25rem;
          font-weight: bold;
          border: none;
          background-color: #e81ecd;
          border-radius: 1rem;
          color: #ffffff;
          font-size: 20px;
          box-shadow: 1px 10px 10px rgba(0, 0, 0, 0.13);
          transition: all 0.3s;
        }
      </style>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/franks.css">
      <div class="frank-card p-3">
        <h3>${this.getAttribute('product')}</h3>
        <a href="${this.getAttribute('product')}.php">
          <img src="assets/images/productMainImages/${this.getAttribute('product')}main.jpeg" alt="">
        </a>
        <div class="product-details">
          <product-counter style="width:100%;" product="${this.getAttribute('product')}" btnWidth="75%" btnHeight="70%" class="h-65 w-100"></product-counter>
          <button class="btn" onclick="ProductCard.viewProduct('${this.getAttribute('product')}')">View Product</button>
        </div>
      </div>
    `;
    console.log("product card working " + this, this.getAttribute("product"));
  }

  static viewProduct(pn) {
    console.log(document.getElementById("viewProduct"));
    document.getElementById("viewProduct").innerHTML = `<product-page product="${pn}"></product-page>`
    window.scrollTo(0,0)
  }
}


customElements.define('product-card', ProductCard);
class ProductPage extends HTMLElement {
  static productPages=[];
  constructor() {

    super();  
      ProductPage.productPages.push(this);
      console.log(productPricing);
      

   var productName = this.getAttribute("product");
   
    this.product = {
      title:productName,                        
      description: productPricing[productName].description,
      id: productName,
      features: productPricing[productName].bulletPoints
    };
    this.imageFolderPath = `assets/images/productImages/${this.product.id}/`;
    this.loadPricingData();
    this.loadImages();
    
  }

  loadPricingData() {
    if (this.product.id in productPricing) {
      this.product.price = productPricing[this.product.id].RetailPrice;
  
      this.product.increment = productPricing[this.product.id].RetailIncrement;
      this.product.min = productPricing[this.product.id].RetailMinimum;
      this.product.wholesalePrice = productPricing[this.product.id].WholesalePrice;
      this.product.wholesaleIncrement = productPricing[this.product.id].WholesaleIncrement;
      this.product.wholesaleMinimum = productPricing[this.product.id].WholesaleMinimum;
    } else {
      console.error(`Pricing data not found for product: ${this.product.id}`);
    }
  }

  async loadImages() {
    try {
      const response = await fetch(`includes/getProductImages.php?productId=${this.product.id}`);
      const imageFiles = await response.json();
      this.product.images = imageFiles.map(image => this.imageFolderPath + image);
      this.render();
    } catch (error) {
      console.error('Error loading product images:', error);
    }
  }

  render() {
    console.log("rendering product page for: "+this.product.id); 
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
      
      <style>

   
    

    

      .arrow {
     
      
        font-size: 24px;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        cursor: pointer;
      }
    

    
      
    
      .title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 30px;
      }
    
      .title4 {
        font-size: 24px;
      }
    
      .ser-style5 {
        color: #333;
      }
    
     
    
      .prodInfo {
       font-size:20px;
        padding: 0;
        margin: 0;  
         list-style-type: disc;
      }
    
      .prodInfo li {
     
      }
    
      .priceSection {
        margin-top: 20px;
      }
    
      .priceSection #price {
        font-size: 24px;
        font-weight: 700;
        color: #333;
      }
    

    

      .d-flex{
        display:flex;
      }
 

      .lif{
        font-size:20px;
        text-align:center;
      }
      @media (max-width: 1300px) { 
        .h-sm-1500{
          height:1500px;
        }
      }@media(min-width:1300px){
      .h-sm-1500{
       height:700px;
      }}
    </style>    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/franks.css">

      <h1 class="text-center  mt-7">${this.product.title}</h1>
          <div class=" d-flex flex-row align-items-center justify-content-center mt-4 flex-sm-column  h-sm-1500" >       
            <div class="h-100 h-sm-50 w-sm-100 w-40 d-flex flex-column align-items-center">
           
              <div class="h-85 w-100 d-flex align-items-center justify-content-center flex-row mx-5">           
                   <div class=" arrow w-15 text-center" style="font-size:40px;" onclick="navigateLightbox(-1)">←</div>
                <img class="h-85" src="${this.product.images[0]}" alt="Img" onclick="openLightbox('${this.product.images[0]}')" id="lightboxImage">
                <div class="arrow w-15 text-center" style="font-size:40px;" onclick="navigateLightbox(1)">→</div>

              </div>
              <div  class="w-50 w-sm-75 h-20 mt-6 d-flex flex-row align-items-center justify-content-center">
                ${this.product.images.map((image, index) => `
                  <div class="border h-100   ">
                    <img src="${image}" class="h-100 " alt="Img" onclick="openLightbox('${image}', ${index})">
                  </div>
                `).join('')}
              </div>
            </div>
            <div class="h-100 w-50 w-sm-100 mt-sm-10 d-flex align-items-center flex-column h-sm-50">
          
         
                <p class="w-50 w-sm-90 mt-7" style="font-size:25px;text-indent:40px;">  ${this.product.description}</p>
                <ul class="prodInfo w-40">
                  ${this.product.features.map(feature => `<li class="lif">${feature}</li>`).join('')}
                </ul>
                <div class="priceSection mt-6 mb-6">
                  <div style="font-size:40px;" class="text-center w-100" id="price">$${this.product.price+" "} per unit </div>
          
                </div>
                
                <product-counter class="h-50 d-block w-35" product="${this.product.id}" btnWidth="100%" btnHeight="100%" increment="${this.product.increment}" min="${this.product.min}"></product-counter>
              </div>
     
          </div>
  
    `;

    this.lightboxImage = this.shadowRoot.getElementById('lightboxImage');
    this.currentIndex = 0;
  }

  openLightbox(imageUrl, index) {
    this.lightboxImage.src = imageUrl;
    this.currentIndex = index;
  }

  navigateLightbox(direction) {
    this.currentIndex += direction;
    if (this.currentIndex < 0) {
      this.currentIndex = this.product.images.length - 1;
    } else if (this.currentIndex >= this.product.images.length) {
      this.currentIndex = 0;
    }
    this.lightboxImage.src = this.product.images[this.currentIndex];
  }
}

customElements.define('product-page', ProductPage);

  class Dropdown {
 
    constructor() {
      this.dropdowns = document.querySelectorAll('.frank-dropdown');
      this.dropdownstoggle = document.querySelectorAll('.frank-dropdown-toggle');
   //   console.log("making drop down"+this.dropdowns[0])
      this.initHover();
      this.initToggle();
    }
    initToggle(){
       
      this.dropdownstoggle.forEach(dropdown=>{
        this.positionDropdown(dropdown);
        let buttonId= dropdown.getAttribute("buttonId");
        let dropBtn;
        let d =dropdown.getAttribute('display');
        if(d==null){
          d="block"
        }
        if(buttonId!=null){  
          console.log("button id !=null")
          dropBtn = document.getElementById(buttonId);
           } 
           else{
          
            dropBtn = dropdown.parentElement.children[0];
           }
          dropBtn.toggle = false;
          dropBtn.addEventListener("click",()=>{
            console.log("clicking ::"+d);
            if(dropBtn.toggle==true)
              Dropdown.closeDropdown(dropdown)
            else
            Dropdown.openDropdown(dropdown,d)
          dropBtn.toggle= dropBtn.toggle?false:true
        })
      })

    }
    initHover() {      
  

      this.dropdowns.forEach(dropdown => {   
        this.positionDropdown(dropdown);
       
        console.log("making drop down");
        const dropdownToggle = dropdown.parentElement;
        let d =dropdown.getAttribute('display');
        if(d==null){
          d="block"
        }
        console.log(d);
     
        dropdownToggle.addEventListener('mouseenter', () => {
   
          Dropdown.openDropdown(dropdown,d);
          console.log("entered in drop down");
      
        })
        dropdownToggle.addEventListener('mouseleave', () => {
    
          setTimeout(() => {
            Dropdown.closeDropdown(dropdown);
          }, 1500);
        });
        
   
      });
      

    }

    positionDropdown(dropdown) {
     
   //   dropdown.style.transform = 'translateY(100%)  ';
   const parentRect = dropdown.parentElement.getBoundingClientRect();
     var parentElement = dropdown.parentElement;
      parentElement.style.position="relative";
      parentElement.style.display="inline-block";
      

   dropdown.style.display ="none"
   dropdown.style.position = "absolute";
   dropdown.style.top = "100%"; // Places it directly below the parent
   //dropdown.style.left = "0%"; // Centers it based on parent's width
   dropdown.style.transform = "translateX(-50%)"; 
    }

    positionDropdowns() {
      this.dropdowns.forEach(dropdown => {
        if (dropdown.classList.contains('show')) {
          this.positionDropdown(dropdown);
        }
      });
    }
    static closeDropdown(dropdown){
     // console.log("closing drop down: "+dropdown.inDrop);
      
          dropdown.style.display='none';
    }
    static openDropdown(dropdown,display){      
     // console.log("opening drop down: "+dropdown.inDrop);
      dropdown.style.display = display;
      dropdown.inDrop=true;

    }
 
    
  
  }
 
//customElements.define('product-page', ProductPage);
  // Usage example
  
  const dropdowns = new Dropdown();
  class CartItem extends HTMLElement{
    constructor(){
      super();
      this.productName = this.getAttribute('productName');
      this.render();
    }
    render(){
      this.attachShadow({mode:'open'})
      this.shadowRoot.innerHTML =`
      <link rel="stylesheet" href="assets/css/franks.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
       <div 
            style="padding: 10px;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            color: #212529;
            cursor: default;
            background: white" 
            class="d-flex flex-row align-items-center" >
                <span class="item-name w-40" style="">${this.productName}</span>
                 <quantity-counter class="w-40" id="cartCounter-${this.productName}" onincrement="ProductCounter.addToCart('${this.productName}',1)" ondecrement="ProductCounter.removeFromCart('${this.productName}',1)"></quantity-counter>
                <span class="item-price w-10" id="item-price-${this.productName}" style="">Price: $${shoppingCart[this.productName].quantity *shoppingCart[this.productName].price}</span>
            </div>`;
            console.log(  this.shadowRoot.getElementById(`cartCounter-${this.productName}`))
            this.shadowRoot.getElementById(`cartCounter-${this.productName}`).setCounter(shoppingCart[this.productName].quantity);
    }
    updateAmount(quantity){
       
      this.shadowRoot.getElementById(`cartCounter-${this.productName}`).setCounter(quantity);

    }
  }
  customElements.define("cart-item",CartItem)
  class CartPage extends HTMLElement{
    static cartPages=[];
    constructor(){
      super();
      this.render();
      CartPage.cartPages.push(this);
    }
    render(){
      this.attachShadow({mode:'open'})
      var elements =[];
      for(var product in shoppingCart){
        this.shadowRoot.innerHTML+=` 
        <cart-item id=${product} productName=${product}></cart-item>
        `;
       
        

        
      }
      
      
    }
    
    static updateCartPages(productName){
      
      console.log("updating amount in cart page");
      for(var cart of this.cartPages){
        console.log(this.cartPages)
        console.log(cart)
        if (shoppingCart[productName]==undefined){
          cart.shadowRoot.removeChild( cart.shadowRoot.getElementById(productName));
          continue;
        }
        if(  cart.shadowRoot.getElementById(productName)==null){
          cart.shadowRoot.innerHTML+=` <cart-item id=${productName} productName=${productName}></cart-item>`;
          continue;
        }
        cart.shadowRoot.getElementById(productName).updateAmount(shoppingCart[productName].quantity);
      }
    }
  }
  customElements.define("cart-pagee",CartPage)
  class NavBar extends HTMLElement
  {
    constructor(){
      super();
      this.className="pos-t-0 pos-relative text-white "
      this.render();
    }
    render(){
 this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
          <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/franks.css">
  
		
    <div class="d-flex flex-column justify-content-center" style="background: #010d14;">


    <div class="d-flex flex-row justify-content-evenly align-items-center" style="height:50px;border-bottom: 1px solid rgba(255, 255, 255, 0.2);">

        <div class="d-flex flex-row justify-content-evenly w-50 text-white d-sm-none" >

            <div class="text-white">
                <i class="fi fi-rr-envelope-plus mainPurpFont"></i>
                <a href="mailto:info@planet9@info.com" class="text-white">info@Planet9.com</a>
            </div>
            <div class="text-white">
                <i class="fi fi-rr-phone-call mainPurpFont"></i>
                <a href="tel:(+1)7854-333-222" class="text-white">(+1) 7854-333-222</a>
            </div>
            <div class="text-white">
                <i class="fi-rr-map-marker-home mainPurpFont"></i>
                9876 Street, Houston, TX
            </div>

        </div>

        <div class="d-flex flex-row justify-content-evenly w-30 text-white">

            <div class="opening text-white">
                <i class="fi fi-rr-time-add"></i>
            </div>
            <div class="text-white">
                <a href="#" class="text-white"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="text-white">
                <a href="#" class="text-white"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="text-white">
                <a href="#" class="text-white"><i class="fa fa-instagram"></i></a>
            </div>

        </div>


    </div>

	<div class="d-sm-none d-flex flex-row align-items-center justify-content-evenly text-white w-75 align-self-center" style="height:100px;font-size:20px;text-align:center;">
  	  <div class=" text-white">
        <a href="index.php" class="text-white">Home</a>
   		 </div>
   	 <div class="text-white">
        <a href="about.php" class="text-white">About</a>
    </div>
    <div class="text-white">
        <a href="products.php" class="text-white">Products</a>
        <div class=" frank-dropdown frank-card  p-3">
            <div class=""><a href="lyftoffbrownies.php" class="text-dark">Lyft Off 500mg Brownies</a></div>
            <div class="pt-4"><a href="elgallomix.php" class="text-dark">El Gallo Mix Candy</a></div>
            <div class="pt-4">
                <a href="cannagar.php" class="text-dark">Virginia-rolled Cannagar</a>
            </div>
        </div>
    </div>
    <div class="text-white">
        <a href="contact.html" class="text-white">Contact</a>
    </div>
    <div class=" text-white" id="">
        <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
            <a class="text-white"><i class="fas fa-user"></i> Account</a>
            <div class="frank-dropdown frank-card w-10">
                <div class="text-white"><a onclick="logout()" class="text-white">Logout</a></div>
                <div class="text-white"><a href="AccountSettings.php" class="text-white">Account Settings</a></div>
            </div>
        <?php else: ?>
            <a onclick="popup('login')" class="text-white">Login</a>
            <div class="frank-dropdown frank-card w-10">
                <div class="text-white w-100"><a href="login.html?show=signup" class="d-block text-dark text-center w-100" style="font-size:25px;">Sign Up</a></div>
            </div>
        <?php endif; ?>
    </div>
    <div class="w-10 text-white">
        <a class="nav-link text-white" href="#">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="cart-count text-white" id="cart-count">

                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $totalItems = array_sum(array_column($_SESSION['cart'], 'quantity'));
                    echo $totalItems;
                } else {
                    echo '0';
                }
                ?>		
					<i class="fas fa-angle-down"></i>
            </span>
        </a>
        <div class="frank-dropdown frank-card dropdownWindow text-white" id="cart"  style="width:550px; transform:translateX(-30%); ">
				<cart-page></cart-page>
        </div>
    </div>
</div>	

		<div class="d-none d-sm-flex flex-row justify-content-evenly align-items-center" style="height:100px;font-size:30px;">
		
		<div>
		<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
			<div><i class="fa fa-cog" aria-hidden="true"></i></div>
			<?php else: ?>
				<div>Log In</div>
				<?php endif; ?>
		</div>
			

		<div class ="text-white">
        <a class="nav-link text-white" href="#">
            <i class="fa-solid fa-cart-shopping" style="font-size:30px"></i>
            <span class="cart-count text-white" id="cart-count" style="font-size:30px">

                <?php
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    $totalItems = array_sum(array_column($_SESSION['cart'], 'quantity'));
                    echo $totalItems;
                } else {
                    echo '0';
                }
                ?>		
					<i class="fas fa-angle-down" style="font-size:30px"></i>
            </span>
        </a>
        <div class="frank-dropdown frank-card dropdownWindow text-white"  style="width:550px;">
        </div>
		
    </div>
	<div>
				<div>Menu	<i class="fas fa-angle-down" style="font-size:30px"></i></div>
		</div>
		</div>
</div>
<script src="franks.js"> </script>
    `
  
  }
  }
  customElements.define("nav-bar",NavBar)
