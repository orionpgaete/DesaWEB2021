// Prototypes

//Object Constructor y Object Literal

/** Object Literal */
const producto ={
    nombre: 'tablet',
    precio: 500
}


function Cliente(nombre, apellido){
    this.nombre = nombre;
    this.apellido = apellido;
}

// Oject Constrcutor
function Producto(nombre, precio){
    this.nombre = nombre;
    this.precio = precio;

}

//Crear funcion que solo se utiliza en un objeto en especifico
Producto.prototype.formatProducto = function(){
    return `El Producto ${producto.nombre} tiene un precio de: $ ${producto.precio}`;
}

const producto2 = new Producto('Monitor Curvo', 800);
const producto3 = new Producto('Notebook Gamer', 500);



const cliente = new Cliente('Juan', 'Del Carmen');

console.log(cliente);

function formatProducto(producto){
    return `El Producto ${producto.nombre} tiene un precio de: $ ${producto.precio}`;
}

console.log(producto2.formatProducto() );
console.log(producto3);




