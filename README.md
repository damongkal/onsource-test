- I created migrations.sql file for the database table used in the app
- please modify bootstrap.php for db connection
- I did not use apache rewrite therefore I had to use folder structure to create API endpoints

API endpoints

1. fetch all records

/users/

2. fetch single record

/users/get/?id=1

3. create new record. data should be in POST variable

/users/post/

4. update record. data should be in POST variable

/users/put/?id=1

5. delete record
/users/delete/?id=1
