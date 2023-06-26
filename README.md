# RollingStonesApi

Endpoint: /all
Método: GET
Controlador: songApiController
Método del controlador: getAll
Descripción: Este endpoint devuelve todos los registros de canciones y álbumes de la base de datos.
Uso: Puede utilizarse para obtener una lista completa de todas las canciones y álbumes disponibles en la API.

Ejemplo de uso:
GET /all

Endpoint: /songs
Método: GET
Controlador: songApiController
Método del controlador: getAllSongs
Descripción: Este endpoint devuelve todos los registros de canciones de la base de datos.
Uso: Puede utilizarse para obtener una lista de todas las canciones disponibles en la API.

Ejemplo de uso:
GET /songs

Endpoint: /songs/:ID
Método: GET
Controlador: songApiController
Método del controlador: getSong
Descripción: Este endpoint devuelve los detalles de una canción específica según el ID proporcionado.
Uso: Puede utilizarse para obtener información detallada de una canción en particular.

Ejemplo de uso:
GET /songs/1

Endpoint: /songs/:ID
Método: DELETE
Controlador: songApiController
Método del controlador: deleteSong
Descripción: Este endpoint elimina una canción específica según el ID proporcionado.
Uso: Puede utilizarse para eliminar una canción de la base de datos.

Ejemplo de uso:
DELETE /songs/1

Endpoint: /songs
Método: POST
Controlador: songApiController
Método del controlador: insert
Descripción: Este endpoint permite insertar una nueva canción en la base de datos.
Uso: Puede utilizarse para agregar una nueva canción a la API.

Ejemplo de uso:
POST /songs
Body: { "title": "Canción nueva", "artist": "Artista nuevo" }

Endpoint: /songs/:ID
Método: PUT
Controlador: songApiController
Método del controlador: updateSong
Descripción: Este endpoint actualiza una canción específica según el ID proporcionado.
Uso: Puede utilizarse para modificar los detalles de una canción existente.

Ejemplo de uso:
PUT /songs/1
Body: { "title": "Nuevo título" }

Endpoint: /albums
Método: GET
Controlador: albumsApiController
Método del controlador: getAll
Descripción: Este endpoint devuelve todos los registros de álbumes de la base de datos.
Uso: Puede utilizarse para obtener una lista de todos los álbumes disponibles en la API.

Ejemplo de uso:
GET /albums

Endpoint: /albums/:ID
Método: GET
Controlador: albumsApiController
Método del controlador: getAlbum
Descripción: Este endpoint devuelve los detalles de un álbum específico según el ID proporcionado.
Uso: Puede utilizarse para obtener información detallada de un álbum en particular.

Ejemplo de uso:
GET /albums/1

Endpoint: /songsAlbum/:ID
Método: GET
Controlador: albumsApiController
Método del controlador: getSongsByAlbum
Descripción: Este endpoint devuelve todas las canciones asociadas a un álbum específico según el ID proporcionado.
Uso: Puede utilizarse para obtener una lista de canciones pertenecientes a un álbum en particular.

Ejemplo de uso:
GET /songsAlbum/1

Endpoint: /albums/:ID
Método: DELETE
Controlador: albumsApiController
Método del controlador: deleteAlbum
Descripción: Este endpoint elimina un álbum específico según el ID proporcionado.
Uso: Puede utilizarse para eliminar un álbum de la base de datos.

Ejemplo de uso:
DELETE /albums/1

Endpoint: /albums
Método: POST
Controlador: albumsApiController
Método del controlador: addAlbum
Descripción: Este endpoint permite agregar un nuevo álbum a la base de datos.
Uso: Puede utilizarse para insertar un nuevo álbum en la API.

Ejemplo de uso:
POST /albums
Body: { "title": "Nuevo álbum", "artist": "Artista nuevo" }

Endpoint: /albums/:ID
Método: PUT
Controlador: albumsApiController
Método del controlador: updateAlbum
Descripción: Este endpoint actualiza un álbum específico según el ID proporcionado.
Uso: Puede utilizarse para modificar los detalles de un álbum existente.

Ejemplo de uso:
PUT /albums/1
Body: { "title": "Nuevo título" }
