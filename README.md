# Rolling Stones 

## Endpoint: /all
- Método: GET
- Controlador: songApiController
- Método del controlador: getAll
- Descripción: Este endpoint devuelve todos los registros de canciones y álbumes de la base de datos.
- Uso: Puede utilizarse para obtener una lista completa de todas las canciones y álbumes disponibles en la API.

### Ejemplo de uso:
GET /all

## Endpoint: /songs
- Método: GET
- Controlador: songApiController
- Método del controlador: ordenarCanciones
- Descripción: Este endpoint devuelve todos los registros de canciones de la base de datos ordenados.
- Uso: Puede utilizarse para obtener una lista de todas las canciones disponibles en la API, ordenadas según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por id_song; u ordenada ASC por id_song.

### Ejemplo de uso:
GET /songs?order=DESC&sort=title_song
GET /songs?order=DESC
GET /songs?sort=title_song
GET /songs

## Endpoint: /songsPag
- Método: GET
- Controlador: songApiController
- Método del controlador: paginacion
- Descripción: Este endpoint devuelve una página de registros de canciones de la base de datos.
- Uso: Puede utilizarse para obtener una lista paginada de canciones disponibles en la API.

### Ejemplo de uso:
GET /songsPag?pagina=2&limite=8

## Endpoint: /songs/:ID
- Método: GET
- Controlador: songApiController
- Método del controlador: getSong
- Descripción: Este endpoint devuelve los detalles de una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para obtener información detallada de una canción en particular.

### Ejemplo de uso:
GET /songs/1

## Endpoint: /songs/:ID
- Método: DELETE
- Controlador: songApiController
- Método del controlador: deleteSong
- Descripción: Este endpoint elimina una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para eliminar una canción de la base de datos.

### Ejemplo de uso:
DELETE /songs/1

## Endpoint: /songs
- Método: POST
- Controlador: songApiController
- Método del controlador: insert
- Descripción: Este endpoint agrega una nueva canción a la base de datos.
- Uso: Puede utilizarse para insertar una nueva canción en la API.

### Ejemplo de uso:
POST /songs

## Endpoint: /songs/:ID
- Método: PUT
- Controlador: songApiController
- Método del controlador: updateSong
- Descripción: Este endpoint actualiza los detalles de una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de una canción en la base de datos.

### Ejemplo de uso:
PUT /songs/1

## Endpoint: /albums
- Método: GET
- Controlador: albumsApiController
- Método del controlador: ordenarAlbums
- Descripción: Este endpoint devuelve todos los registros de álbumes de la base de datos ordenados.
- Uso: Puede utilizarse para obtener una lista de todos los álbumes disponibles en la API, ordenados según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por id_album; u ordenada ASC por id_album.

### Ejemplo de uso:
GET /albums?sort=id_album&order=DESC
GET /albums?order=ASC
GET /albums?sort=titulo_album
GET /albums

## Endpoint: /albumsPag
- Método: GET
- Controlador: albumsApiController
- Método del controlador: paginacion
- Descripción: Este endpoint devuelve una página de registros de álbumes de la base de datos.
- Uso: Puede utilizarse para obtener una lista paginada de álbumes disponibles en la API con un límite determinado de álbums por página.

### Ejemplo de uso:
GET /albumsPag?pagina=3&limite=10

## Endpoint: /albums/:ID
- Método: GET
- Controlador: albumsApiController
- Método del controlador: getAlbum
- Descripción: Este endpoint devuelve los detalles de un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para obtener información detallada de un álbum en particular.

### Ejemplo de uso:
GET /albums/1

## Endpoint: /songsAlbum/:ID
- Método: GET
- Controlador: albumsApiController
- Método del controlador: getSongsByAlbum
- Descripción: Este endpoint devuelve todas las canciones asociadas a un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para obtener una lista de canciones pertenecientes a un álbum en particular.

### Ejemplo de uso:
GET /songsAlbum/1

## Endpoint: /albums/:ID
- Método: DELETE
- Controlador: albumsApiController
- Método del controlador: deleteAlbum
- Descripción: Este endpoint elimina un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para eliminar un álbum de la base de datos.

### Ejemplo de uso:
DELETE /albums/1

## Endpoint: /albums
- Método: POST
- Controlador: albumsApiController
- Método del controlador: addAlbum
- Descripción: Este endpoint agrega un nuevo álbum a la base de datos.
- Uso: Puede utilizarse para insertar un nuevo álbum en la API.

### Ejemplo de uso:
POST /albums

## Endpoint: /albums/:ID
- Método: PUT
- Controlador: albumsApiController
- Método del controlador: updateAlbum
- Descripción: Este endpoint actualiza los detalles de un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de un álbum en la base de datos.

### Ejemplo de uso:
PUT /albums/1

## Endpoint: /login
- Método: POST
- Controlador: UserController
- Método del controlador: login
- Descripción: Este endpoint permite a un usuario iniciar sesión, completando los datos en el body, y obtener un token de autenticación.
- Uso: Puede utilizarse para autenticar a un usuario en la API.

BODY:
{
  "username": "admin",
  "password": "admin"
}
||
{
  "username": "vanaina",
  "password": "123456"
}
||
{
  "username": "amparorosell",
  "password": "987654321"
}

### Ejemplo de uso:
POST /login

# Autoras:
<NAME> Vanina Pozzobon
<NAME> Amparo Rosell


### End.