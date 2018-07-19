# social_plugin

This library is a social Login and Sign Up integration based on Laravel/Lumen Framework and laravel/socialite.

So, first to use this library you should install <a href="https://lumen.laravel.com/docs/5.6">laravel/lumen.</a>, and then intall the <a href="https://laravel.com/docs/5.6/socialite">laravel/socialite.</a>

After you have finished intalling lumen and socialite, then install this library so you are able to authenticate with OAuth providers using Laravel Socialite. Socialite currently supports authentication with Facebook, Twitter, LinkedIn, Google, GitHub and Bitbucket.

After Installation:
=====================

1- File bootstrap/app.php
   => Uncomment $app->withFacades();
   => Add the below code in "Create the Application" Section:
      if (!class_exists('Socialite')) {
         class_alias('Laravel\Socialite\Facades\Socialite', 'Socialite');
       }
   => Add the below code in the "Register Service Providers" Section:
      $app->register(Laravel\Socialite\SocialiteServiceProvider::class);
   
   =>
   

