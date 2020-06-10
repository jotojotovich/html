/* jshint esversion:6 */

// выполнение скрипта имеет две фазы

// фаза 1 - подготовка к запуску, инициализация
// скрипт сканируется на предмет объявления данных, т.е. функций вида Function Declaration
// и на предмет объявления переменных var
// !!!каждое такое объявление добавляется в window!!!
// функции, объявленные как Function Declaration, создаются сразу работающими, а переменные
// получают значение undefined


// фаза 2 - собственно, исполнение.
// переменным присваивается значение, когда поток выполнения доходит
// до соответсвующей строчки кода, до этого они undefined




window.addEventListener('DOMContentLoaded', function () {
  const d = document;
  let products = d.querySelectorAll('.product'),
      buttons = d.querySelectorAll('button'),
      openBtn = d.querySelector('.open');

  // создание корзины javascript-ом
  function createCart () {
    let cart = d.createElement('div'),
        field = d.createElement('div'),
        heading = d.createElement('h2'),
        closeBtn = d.createElement('button');
    
    cart.classList.add('cart');
    field.classList.add('cart-field');
    closeBtn.classList.add('close');

    heading.textContent = 'В корзине:';
    closeBtn.textContent = 'Закрыть';

    d.body.appendChild(cart);
    cart.appendChild(heading);
    cart.appendChild(field);
    cart.appendChild(closeBtn);
  }

  createCart();

  let field = d.querySelector('.cart-field'),
      cart = d.querySelector('.cart'),
      close = d.querySelector('.close');

  function openCart () {
     //let cart = d.querySelector('.cart').style.display = 'block';
     cart.style.display = 'block';
  }

  function closeCart () {
    //let cart = d.querySelector('.cart').style.display = 'none';
    cart.style.display = 'none';
  }

  openBtn.addEventListener('click', openCart);
  
  
  //let closeBtn = d.querySelector('.close');
  close.addEventListener('click', closeCart);
  

  buttons.forEach (function (item, i) {
    item.addEventListener('click', function () {
        let item = products[i].cloneNode(true);
            btn = item.querySelector('button');
        
        btn.remove();
        field.appendChild(item);
        products[i].remove();
    });
  });
  

});