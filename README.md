## Todo App

#### installation
```
1. $ git clone this_project
2. $ cd this_project
```

#### project setup
```
1. $ cp .env.example .env
2. $ composer install
3. $ php artisan key:generate
4. $ php artisan config:cache
5. $ php artisan migrate
     [to migrate tables make sure your DB_DATABASE in your env already exist]

6. $ php artisan serve
```

### FYI
#### if you're having trouble in using the default ports
```
$ php artisan serve --port=YOUR_DESIRED_PORT
 [ex] php artisan serve --port=9090
```

#### executables
```
to seed the db
$ php artisan db:seed 


to clear the cache and config
$ php artisan config:clear
$ php artisan cache clear


to check the route list
$ php artisan route:list


to link the storage
$ php artisan storage:link
```
