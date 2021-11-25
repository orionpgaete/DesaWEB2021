const meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];

const carrito = [
    {nombre: 'Monitor 20 Pulgadas', precio: 500},
    {nombre: 'Televisor 32 Pulgadas', precio: 700},
    {nombre: 'Tablet', precio: 650},
    {nombre: 'Audifonos', precio: 300},
    {nombre: 'Teclado', precio: 50},
    {nombre: 'celular', precio: 1500},
    {nombre: 'Bocinas', precio: 57},
    {nombre: 'Laptop', precio: 100},
    {nombre: 'Notebook Gamer', precio: 680}
];

meses.forEach(function(mes){
    if(mes == 'Marzo'){
        console.log(mes);
    }
})

//includes

const res = meses.includes('Marzo');
console.log(res);

result = carrito.some(function(producto){
    return producto.nombre === 'Bocinas'
})
console.log(result);