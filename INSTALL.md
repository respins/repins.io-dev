## Deployment
Make sure Docker is running, as we're using laravel sail for most drivers like Selenium and so on. However you can also add in the package to your existing Laravel systems easily, for package deployment skip to the [Package install](#) section.

Follow these steps if you're starting afresh:

Deploy latest laravel sail by running:

```
    sudo bash laravel-base.sh
```

After deploying, execute:

```
    cd respins-laravel && ./vendor/bin/sail up -d && cd ../
```

You can edit the laravel-configurator.sh to set your APP_URL. Run the respins laravel configurator:

```
    sudo bash laravel-configurator.sh
```

After the above, make sure to restart the full stack by executing:

```
    cd respins-laravel && ./vendor/bin/sail restart -d && cd ../
```

You now have the base laravel running, confirm all is working by visiting your app in browser. You can access the artisan command for additional configuration by running:
```
    ./vendor/bin/sail artisan
```

## Auth basic scaffold
We're using existing laravel extensions, as is safe & has on-going support.

You can pick between Laravel Breeze && Laravel Jetstream.

```
    composer require laravel/breeze --dev
    php artisan breeze:install
```


Jetstream:
```
    composer require laravel/jetstream
```