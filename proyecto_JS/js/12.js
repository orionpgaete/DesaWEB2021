//POO

//Object Constructor y Object Literal

/** Object Literal */
const producto ={
    nombre: 'tablet',
    precio: 500
}

// Oject Constrcutor
function Producto(nombre, precio){
    this.nombre = nombre;
    this.precio = precio;

}

const producto2 = new Producto('Monitor Curvo', 800);
const producto3 = new Producto('Notebook Gamer', 500);


console.log(producto2);
console.log(producto3);
