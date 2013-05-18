## Introduction

A simple leaderboad system that stores name and points. This can be used as an example of using [CodeIgniter Bootstrap](https://github.com/sjlu/CodeIgniter-Bootstrap) as both a website template and as an API.

## Install

### Local

You'll need to setup a database in [database.php](https://github.com/sjlu/leaderboards/blob/master/application/config/database.php), then just use it like normally.

### Heroku

Run these commands and then edit [database.php](https://github.com/sjlu/leaderboards/blob/master/application/config/database.php) with the proper credits.

    heroku apps:create
    heroku addons:add cleardb
    heroku config

### License

MIT.