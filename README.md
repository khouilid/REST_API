# PHP REST API

> This is a simple PHP REST API from scratch with no framework.

## Quick Start

Import the DB.sql file, change the params in the config/Database.php file to your own




- get single project by it's ID:

Should include ID in the URL (like: id= 1)
http://localhost/REST_API/Controllers/Read_id.php



- get all the project:

http://localhost/REST_API/Controllers/Read.php


- insert data:

http://localhost/REST_API/Controllers/Post.php
Should include all in the URL (Name/Github/Website/Dec)



-Delete items:

http://localhost/REST_API/Controllers/Delete.php
Should include ID in the URL (like: id= 1)




- update item 

http://localhost/REST_API/Controllers/Update.php
Should include ID in the URL (like: id= 1)
And the data you want to update (name/Github/Website/Dec)





