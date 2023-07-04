# Rolling Stones

## Endpoint: /all

- Método: GET
- Controlador: songApiController
- Método del controlador: getAll
- Descripción: Este endpoint devuelve todos los registros de canciones y álbumes de la base de datos.
- Uso: Puede utilizarse para obtener una lista completa de todas las canciones y álbumes disponibles en la API.

### Ejemplo de uso:

_GET /all_

## Endpoint: /songs

- Método: GET
- Controlador: songApiController
- Método del controlador: ordenarCanciones
- Descripción: Este endpoint devuelve todos los registros de canciones de la base de datos ordenados.
- Uso: Puede utilizarse para obtener una lista de todas las canciones disponibles en la API, ordenadas según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por id_song; u ordenada ASC por id_song.

### Ejemplo de uso:

_GET /songs?order=DESC&sort=title_song_
_GET /songs?order=DESC_
_GET /songs?sort=title_song_
_GET /songs_

## Endpoint: /songsPag

- Método: GET
- Controlador: songApiController
- Método del controlador: paginacion
- Descripción: Este endpoint devuelve una página de registros de canciones de la base de datos.
- Uso: Puede utilizarse para obtener una lista paginada de canciones disponibles en la API.

### Ejemplo de uso:

_GET /songsPag?pagina=2&limite=8_

## Endpoint: /songs/:ID

- Método: GET
- Controlador: songApiController
- Método del controlador: getSong
- Descripción: Este endpoint devuelve los detalles de una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para obtener información detallada de una canción en particular.

### Ejemplo de uso:

_GET /songs/1_

## Endpoint: /songs/:ID

- Método: DELETE
- Controlador: songApiController
- Método del controlador: deleteSong
- Descripción: Este endpoint elimina una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para eliminar una canción de la base de datos.

### Ejemplo de uso:

_DELETE /songs/1_

## Endpoint: /songs

- Método: POST
- Controlador: songApiController
- Método del controlador: insert
- Descripción: Este endpoint agrega una nueva canción a la base de datos.
- Uso: Puede utilizarse para insertar una nueva canción en la API.

### Ejemplo de uso:

_POST /songs_

## Endpoint: /songs/:ID

- Método: PUT
- Controlador: songApiController
- Método del controlador: updateSong
- Descripción: Este endpoint actualiza los detalles de una canción específica según el ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de una canción en la base de datos.

### Ejemplo de uso:

_PUT /songs/1_

## Endpoint: /albums

- Método: GET
- Controlador: albumsApiController
- Método del controlador: ordenarAlbums
- Descripción: Este endpoint devuelve todos los registros de álbumes de la base de datos ordenados.
- Uso: Puede utilizarse para obtener una lista de todos los álbumes disponibles en la API, ordenados según un criterio específico. Puede utilizarse sin order, ni sort, o con únicamente uno de los dos parámetros, de ser así nos devuelve la lista ordenada DESC; o por id_album; u ordenada ASC por id_album.

### Ejemplo de uso:

_GET /albums?sort=id_album&order=DESC_
_GET /albums?order=ASC_
_GET /albums?sort=titulo_album_
_GET /albums_

## Endpoint: /albumsPag

- Método: GET
- Controlador: albumsApiController
- Método del controlador: paginacion
- Descripción: Este endpoint devuelve una página de registros de álbumes de la base de datos.
- Uso: Puede utilizarse para obtener una lista paginada de álbumes disponibles en la API con un límite determinado de álbums por página.

### Ejemplo de uso:

_GET /albumsPag?pagina=3&limite=10_

## Endpoint: /albums/:ID

- Método: GET
- Controlador: albumsApiController
- Método del controlador: getAlbum
- Descripción: Este endpoint devuelve los detalles de un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para obtener información detallada de un álbum en particular.

### Ejemplo de uso:

_GET /albums/1_

## Endpoint: /songsAlbum/:ID

- Método: GET
- Controlador: albumsApiController
- Método del controlador: getSongsByAlbum
- Descripción: Este endpoint devuelve todas las canciones asociadas a un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para obtener una lista de canciones pertenecientes a un álbum en particular.

### Ejemplo de uso:

_GET /songsAlbum/1_

## Endpoint: /albums/:ID

- Método: DELETE
- Controlador: albumsApiController
- Método del controlador: deleteAlbum
- Descripción: Este endpoint elimina un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para eliminar un álbum de la base de datos.

### Ejemplo de uso:

_DELETE /albums/1_

## Endpoint: /albums

- Método: POST
- Controlador: albumsApiController
- Método del controlador: addAlbum
- Descripción: Este endpoint agrega un nuevo álbum a la base de datos.
- Uso: Puede utilizarse para insertar un nuevo álbum en la API.

### Ejemplo de uso:

_POST /albums_

## Endpoint: /albums/:ID

- Método: PUT
- Controlador: albumsApiController
- Método del controlador: updateAlbum
- Descripción: Este endpoint actualiza los detalles de un álbum específico según el ID proporcionado.
- Uso: Puede utilizarse para actualizar la información de un álbum en la base de datos.

### Ejemplo de uso:

_PUT /albums/1_

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

_POST /login_

# Autoras:

<NAME> Vanina Pozzobon
<NAME> Amparo Rosell

### End.
