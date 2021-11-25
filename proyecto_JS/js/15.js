//querySelector
const heading = document.querySelector('.titulo_index h1'); //0 o 1 elemento
heading.textContent = 'Inacap - Ix Region';

console.log(heading);



//querySelectorAll
const titulo = document.querySelectorAll('.contenido p');
titulo[0].textContent = "Introduccion a HTML con JS"
titulo[0].classList.add('clase_nueva');
titulo[1].classList.remove('hashtag');
//console.log(titulo);



//getElementByID
const central = document.getElementById('titulo');
console.log(central);


//generar un nuevo enlace

const nenlace = document.createElement('a');

nenlace.href = 'enlace.html';

nenlace.classList.add('menu');

nenlace.textContent = 'Nosotros';

//Agregar al documento
const nav = document.querySelector('.menu');
nav.appendChild(nenlace);







console.log(nenlace);

