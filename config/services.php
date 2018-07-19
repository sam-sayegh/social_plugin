<?php
return
[
	'github' => [
		'client_id' => env('GITHUB_CLIENT_ID'),         // Your GitHub Client ID
		'client_secret' => env('GITHUB_CLIENT_SECRET'), // Your GitHub Client Secret
		'redirect' => 'http://your-callback-url',
	],
	'facebook' => [
		'client_id' => env('FACEBOOK_CLIENT_ID'),         // Your GitHub Client ID
		'client_secret' => env('FACEBOOK_CLIENT_SECRET'), // Your GitHub Client Secret
		'redirect' => 'http://your-callback-url',
	],
];
?>