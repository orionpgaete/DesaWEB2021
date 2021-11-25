//arreglos o arrays

const num = [10,20,30,40,50];


console.table(num);

/* const meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];

console.table(meses); */

const arreglo = ["hola", 10, true, "no", {nombre: "Pedro"}];

/* console.log(arreglo);

//acceder a lo valores segun su index

console.log(num[2]);

//conocer la extension de un arreglo

console.log(meses.length);

meses.forEach( function(mes){
    console.log(mes);
 }) */

//  num[3] = 60;
//  num[6] = 70;

num.push(80,90,100); //al final del arreglo

num.unshift(-10, -20, -30);  //al inicio del arreglo

console.table(num);


const meses = ['Enero', 'Febrero', 'Marzo', 'Abril'];

console.table(meses);

/* meses.pop(); //elimina al ultimo del arreglo
meses.shift(); //elimina al primero del arreglo */

meses.splice(2, 1);

console.table(meses);

const nuevomes = [...meses, 'Mayo'];
console.table(nuevomes);

