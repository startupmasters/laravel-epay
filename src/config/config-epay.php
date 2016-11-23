<?php
return [
	'submit_url' 	=> 'https://devep2.datamax.bg/ep2/epay2_demo/', //test url
	// 'submit_url' => 'https://www.epay.bg/', // production

	'secret' 		=> 'Here you must type your client secret key from epay site', // client secret
	'client_id' 	=> 'Here you must type your client id from epay site', // client id
	'expire_days' 	=> 1, // expire time for transations in days
	'success_url' 	=> 'epay/success', // where to return user after transaction complete
	'cancel_url' 	=> 'epay/cancel', // return user to this url if transaction is canceled
];
