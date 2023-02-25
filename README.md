<br />
<div align="center">
  <a href="https://github.com/timwassenburg/default-model-order">
    <img src="img/wrench.png" alt="Logo" width=120>
  </a>

<h1 align="center"><strong>Default Order Trait</strong> for Laravel Models</h1>

  <p align="center">
    composer require timwassenburg/default-model-order
  </p>
<br><br>
</div>

## Features
I always thought overwriting the boot method in a model, to add default sorting made it look a bit messy. So I
decided to make this super simple package. Basically all it does is moving the code to a trait to clean
the model up.

## Installation
Install the package with composer.
```bash
composer require timwassenburg/default-model-order
```

## Usage
After installation you can import the ```DefaultOrder``` trait into your model and set the default order.
Then set the ```$orderBy``` variable to the column you want to order by. Optionally you can set the ```$orderDirection``` 
variable to the direction you want to order by. The default value is ```asc```.

```php
use TimWassenburg\DefaultModelOrder\DefaultOrder;

class User extends Model
{
    use DefaultOrder;

    protected static string $orderBy = 'name';
    protected static string $orderDirection = 'desc';
}
```

### Publish config (optional)
If you want to change the default column name or direction you can publish the config file.
```
php artisan vendor:publish --provider="TimWassenburg\DefaultModelOrder\DefaultModelOrderServiceProvider" --tag="config"
```

## Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
