/*jshint esversion: 6 */

window.addEventListener('DOMContentLoaded', function () {

const d = document;
let chooseBtn = d.getElementById('choose'),
  receiveBtn = d.getElementById('receive'),
  heading = d.getElementsByTagName('h2')[0],
  nameInput = d.getElementsByClassName('contactform_name')[0],
  phoneInput = d.querySelector('.contactform_phone'),
  mailInput = d.querySelectorAll('.contactform_mail')[0],
  modal = d.querySelector('.modal'),
  closeBtn = d.querySelector('.close'),
  text = d.getElementsByName('message')[0];


function hover () {
    heading.textContent = 'Действительно всё!';
}


chooseBtn.addEventListener('mouseenter', hover);

chooseBtn.addEventListener('mouseleave', function () {
    heading.textContent = 'Всё включено';
});

receiveBtn.addEventListener('click', function () {
    modal.style.display = 'block';
});

closeBtn.addEventListener('click', function () {
    modal.style.display = 'none';
});

nameInput.addEventListener('input', function () {
    text.value = `Меня зовут ${nameInput.value}. И я хочу спросить: `;
});
});