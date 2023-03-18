# CRUD

![](./public_images/chrome.gif)

![](./public_images/chrome_2.gif)

![](./public_images/chrome_3.gif)

![](./public_images/chrome_4.gif)

# CRUD Postman

![](./public_images/Postman_1.gif)
![](./public_images/Postman_2.gif)

### Rutas de postman

### Todas las categorias

http://blog-crud.test/api/categoriasapi

### Crear categoria

http://blog-crud.test/api/categoriasapi

Body

```
{
"name": "text",
"description": "text"
}
```

### Actualizar categoria

http://blog-crud.test/api/categoriasapi/{id_categoria}

Body

```
{
"name": "text",
"description": "text"
}
```

### Borrar categoria

http://blog-crud.test/api/categoriasapi/{id_categoria}

### Todos los Posts

http://blog-crud.test/api/postsapi

### Crear un Post

```
  {
    "categoria_id": number,
    "title": "text",
    "content": "text",
    "author": "text"
  }
```

### Actualizar un Post

http://blog-crud.test/api/postsapi/{id_post}

```
  {
    "categoria_id": number,
    "title": "text",
    "content": "text",
    "author": "text"
  }
```

### Borrar un Post

http://blog-crud.test/api/postsapi/{id_post}
