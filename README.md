# laravel-epay

I.Instalation

 1. "require": {
        "deshi/epay":"dev-master"
    }
 
 
 2.composer update
 
 
 
 3.Add 
      Deshi\Epay\Epay\EpayServiceProvider::class,
  in config/app.php
  
 4.Also
      'Epay'  => Deshi\Epay\Facades\Epay::class
    
    in aliases array in the same file


 5.php artisan vendor:publish
 
 6.in routes add Epay::test() and see what laravel facade return
