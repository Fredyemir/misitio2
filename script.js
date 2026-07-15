const formInsertar = document.getElementById("formInsertar");

if(formInsertar){
formInsertar.addEventListener("submit", function(e){

let nombre = document.getElementById("nombre").value.trim();
let precio = document.getElementById("precio").value.trim();
let stock = document.getElementById("stock").value.trim();
let categoria = document.getElementById("id_categoria").value;
let mensaje = document.getElementById("mensajeInsertar");

if(nombre=="" || precio=="" || stock=="" || categoria==""){
e.preventDefault();
mensaje.innerHTML="Todos los campos son obligatorios.";
mensaje.style.color="red";
return;
}

if(nombre.length<3){
e.preventDefault();
mensaje.innerHTML="El nombre debe tener mínimo 3 caracteres.";
mensaje.style.color="red";
return;
}

if(precio<=0){
e.preventDefault();
mensaje.innerHTML="El precio debe ser mayor que cero.";
mensaje.style.color="red";
return;
}

if(stock<0){
e.preventDefault();
mensaje.innerHTML="El stock no puede ser negativo.";
mensaje.style.color="red";
return;
}

mensaje.innerHTML="Formulario validado correctamente.";
mensaje.style.color="green";

});
}
function filtrarTabla(){

let texto=document.getElementById("buscar").value.toLowerCase();
let filas=document.querySelectorAll("#tablaDatos tbody tr");
let encontrados=0;

filas.forEach(function(fila){

if(fila.textContent.toLowerCase().includes(texto)){
fila.style.display="";
encontrados++;
}else{
fila.style.display="none";
}

});

let mensaje=document.getElementById("mensajeConsulta");

if(encontrados==0){
mensaje.innerHTML="No se encontraron registros.";
mensaje.style.color="red";
}else{
mensaje.innerHTML="Registros encontrados: "+encontrados;
mensaje.style.color="green";
}

}

const formModificar=document.getElementById("formModificar");

if(formModificar){

formModificar.addEventListener("submit",function(e){

let id=document.getElementById("idModificar").value.trim();
let nombre=document.getElementById("nombreModificar").value.trim();
let mensaje=document.getElementById("mensajeModificar");

if(id=="" || isNaN(id)){
e.preventDefault();
mensaje.innerHTML="Ingrese un ID válido.";
mensaje.style.color="red";
return;
}

if(nombre.length<3){
e.preventDefault();
mensaje.innerHTML="Nombre demasiado corto.";
mensaje.style.color="red";
return;
}

mensaje.innerHTML="Producto actualizado correctamente.";
mensaje.style.color="green";

});

}

const formEliminar=document.getElementById("formEliminar");

if(formEliminar){

formEliminar.addEventListener("submit",function(e){

let id=document.getElementById("idEliminar").value.trim();
let mensaje=document.getElementById("mensajeEliminar");

if(id=="" || isNaN(id)){
e.preventDefault();
mensaje.innerHTML="Ingrese un ID válido.";
mensaje.style.color="red";
return;
}

if(!confirm("¿Deseas eliminar este producto?")){
e.preventDefault();
mensaje.innerHTML="Eliminación cancelada.";
mensaje.style.color="orange";
return;
}

mensaje.innerHTML="Producto eliminado correctamente.";
mensaje.style.color="green";

});

}