
### Laravel-epay package

##Instalation

# Add to your composer.json file
```json
"startupmasters/epay":"dev-master"
```
#Update composer file
 
```composer update```
 
#In config\app.php

```php
StartupMasters\Epay\Epay\EpayServiceProvider::class,
```
...
and
```php
   'Epay'  => StartupMasters\Epay\Facades\Epay::class
```    

#Publish config files 
```bash
php artisan vendor:publish --tag=config
```

#Test
```
in routes add Epay::test() and see what laravel facade return
```
