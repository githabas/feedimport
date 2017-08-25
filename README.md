What's inside?
--------------

Imports feed https://gist.githubusercontent.com/emodus/27d245484a85c2286722b9d146c53354/raw/c9af224580a22cbde969127527c4500e3f7d2a9e/dummyFeed in db. 
Displays imported records in a table and alows editing.


How to install this project
---------------------------

  1. `git clone https://github.com/githabas/feedimport.git`
  1. `cd feedimport`
  1. `composer install`
  1. `php bin/console doctrine:database:create`
  1. `php bin/console doctrine:schema:create`
  1. `php bin/console server:run`
  1. Browse `http://127.0.0.1:8000/`
