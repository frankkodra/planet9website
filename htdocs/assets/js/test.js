//alert("test js running");
class Cart extends HTMLElement{
    static carts =[];
    constructor(){
      
      super();
      console.log("making new cart view");

      this.checkOut;
      if(Object.keys(shoppingCart).length !=0){
        this.checkOut = '   <button class="btn w-30 h-20">Check Out</button>';
      }
      else
        this.checkOut='<div class="w-50 text-large mainPurpFont">NO ITEMS IN THE CART</div>'

      this.attachShadow({ mode: 'open' });
      this.shadowRoot.innerHTML =`
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/franks.css">
      <div class="d-flex flex-column h-100 align-items-center" >
      <div class="w-100 h-80" id="cart">
      
      </div>
        ${this.checkOut}

      </div>
      `;
      
      this.AddDiv = this.shadowRoot.querySelector("#cart")
      var price;
     for(var PN in shoppingCart){
      if(PN.includes("wholesale"))
        {
           price = productPricing[PN.replaceAll("-wholesale","")].WholesalePrice;
         
        }
        else{
          price = productPricing[PN].RetailPrice;
        }
        let div = document.createElement('div');
        div.id="cart-"+PN
        div.style.color="black"
        div.classList.add('d-flex', 'flex-row', 'align-items-center','py-3');
      div.innerHTML+=  `
                     <div class="item-name w-40" style="">${PN}</div>
                      <quantity-counter class="w-40" id="cartCounter-${PN}" onincrement="ProductCounter.addToCart('${PN}',1)" ondecrement="ProductCounter.removeFromCart('${PN}',1)"></quantity-counter>
                     <div class="item-price w-20" id="item-price-${PN}" style="">Price: $${shoppingCart[PN].quantity * price}</div>
         `;
    
      this.AddDiv.appendChild(div);
     var x = this.shadowRoot.querySelector("#cartCounter-"+PN)
     x.setCounter(shoppingCart[PN].quantity)

     console.log(shoppingCart[PN].quantity+"product name cart shopping cart"+PN);
     }
     Cart.carts.push(this);
     
    }
    static updateCarts(PN){
      for(var c in Cart.carts){
        Cart.carts[c].updateCart(PN);
      }
    }
     updateCart(PN){  
      console.log("setting cart counter "+PN);
   if(!(PN in shoppingCart)){
   try{
     console.log("removing item from cart");
     this.shadowRoot.getElementById("cart-"+PN).remove() 
   
   }
   catch(e){} 
    return;
   }
   
     var price;
     if(PN.includes("wholesale")){
       console.log(PN);
       price = productPricing[PN.replaceAll("-wholesale","")].WholesalePrice;
   
     }else{
       price = productPricing[PN].RetailPrice;
     }
   
     if(this.shadowRoot.getElementById("cart-"+PN)!=null){
    
       this.shadowRoot.getElementById("cartCounter-"+PN).setCounter(shoppingCart[PN].quantity);
       this.shadowRoot.getElementById("item-price-"+PN).innerHTML = `Price: $${shoppingCart[PN].quantity * price}`;
   
     }else{
           
      let div = document.createElement('div');
      div.id="cart-"+PN
      div.style.color="black"
      div.classList.add('d-flex', 'flex-row', 'align-items-center');
    div.innerHTML+=  `
                   <div class="item-name w-40" style="">${PN}</div>
                    <quantity-counter class="w-40" id="cartCounter-${PN}" onincrement="ProductCounter.addToCart('${PN}',1)" ondecrement="ProductCounter.removeFromCart('${PN}',1)"></quantity-counter>
                   <div class="item-price w-20" id="item-price-${PN}" style="">Price: $${shoppingCart[PN].quantity * price}</div>
       `;
  

  
    this.AddDiv.appendChild(div);
     var x = this.shadowRoot.querySelector("#cartCounter-"+PN)
     console.log(shoppingCart);
     x.setCounter(shoppingCart[PN].quantity);
        
   }
   
   }
  }
customElements.define('cart-page',Cart);