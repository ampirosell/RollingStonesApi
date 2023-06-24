"use strict";

//const de url... cual es??

const URL = "http://......api/Albums";

async function getAll() {
  let response = await fetch(URL);
  let albums = await response.json();
  showAlbums(albums);
}
//esto va en la vista
function showAlbums(albums) {
  let ul = document.querySelector("#albums");
  ul.innerHTML = "";
  for (const album of albums) {
    // hay que poner todos los elementos del arreglo
    ul.innerHTML += `<li> ${album.titulo}</li>`;
  }
}
