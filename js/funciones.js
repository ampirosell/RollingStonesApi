"use strict";

//const de url... cual es??

const URL = "https://solar-flare-747172.postman.co/workspace/1ecdd61b-2e05-478f-bf1c-1db348fe51ae/api/502666d0-5788-4b89-add4-a9a00ce45532";

//obtiene todos los albums
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
