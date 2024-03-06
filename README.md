- I created migrations.sql file for the database table used in the app
- please modify bootstrap.php for db connection
- I did not use apache rewrite therefore I had to use folder structure to create API endpoints

API endpoints

fetch all records
/users/

fetch single record
/users/get/?id=1

create new record. data should be in POST variable
/users/post/

update record. data should be in POST variable
/users/put/?id=1

delete record
/users/delete/?id=1
