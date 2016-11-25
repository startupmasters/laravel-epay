
### Laravel-epay package

##Instalation

# Add to your composer.json file
```json
"startupmasters/epay":"1.0.*"
```
#Update composer file
 
```composer update```
 
#In config\app.php
 -in 'providers' array
```php
StartupMasters\Epay\Epay\EpayServiceProvider::class,
```
...

 -in 'aliases' array 
```php
   'Epay'  => StartupMasters\Epay\Facades\Epay::class
```    

#Publish config files 
```bash
php artisan vendor:publish --tag=config
```

#How to use 
Add to config-epay.php
```php
<?php
return [
	'submit_url' 	=> 'URLToSend', 
	'secret' 		=> 'Here you must type your client secret key from epay site', // client secret
	'client_id' 	=> 'Here you must type your client id from epay site', // client id
	'expire_days' 	=> 1, // expire time for transations in days
	'success_url' 	=> 'SuccessURL', // where to return user after transaction complete
	'cancel_url' 	=> 'FailURL', // return user to this url if transaction is canceled
];
```
Note:
```
 test url is : https://devep2.datamax.bg/ep2/epay2_demo/
 production url is : https://www.epay.bg/
```
add to your payment controller 

```php
$epay = Epay::generateInputFields([
            'invoice' => 'InvoiceID', // invoice ID
            'amount' => 'amount', // amount(not as a string)
            'descr' => 'Some about order' // info about order
        ],'pageType');
return view('payment')->with('epay', $epay);
```
Note: 'pageType'is what type of gate you want to load.If you want to make payment via Epay site use : 'paylogin' in other case you can use BORICA gateway to make payment ,so then use: 'credit_paydirect'
Your blade view should look something like this:
```html
<form method="post" action="{{ config('config-epay.submit_url') }}">

    {{ csrf_field() }}
    {!! $epay !!}
    <button type="submit">Submit</button>

</form>
```
REFERENCE: Documentation of Epay site ->  https://www.epay.bg/v3main/img/front/tech_wire.pdf (sorry for the language)
