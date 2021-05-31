# House Renting Portal Documentation 
bellow is the documentation for the apis included in House Renting portal backend.

### General Information
Authentication mechanism: JWT
Token TTL: 1 Hour
Refresh token TTL: 30 days 

### Login 
Path : /api/login

type : POST

body : {

    "username": "",
    "password": ""

}

### Register
Path : /api/register 

type : POST

body : {

    "username": "",
    "password": "",
    "type": "",
    "nom": "",
    "prenom": "",
    "cin": ""

}
### JWT refresh 
Path : /api/token/refresh

type : ANY

body : {

    "refresh_token": "",

}

### available APIs
appartements, categories, clients, commentaires, contacts, garages, maisons, photos, proprietaires, studios, terrains, 

#### Get All
Path: /api/{api_name}

type: GET

body{

}

#### Get  
Path: /api/{api_name}/{id}

type: GET

body : {

    "id": "",

}

#### add 
Path: /api/{api_name}/{id}

type: PUT

body : {

    "Fields": "",

}

#### add
Path: /api/{api_name}/{id}

type: PUT

body : {

    "Fields": "",

}