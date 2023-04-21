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

[![Latest Version on Packagist](https://img.shields.io/packagist/v/timwassenburg/default-model-order.svg?style=flat-square)](https://packagist.org/packages/timwassenburg/default-model-order)
[![Total Downloads](https://img.shields.io/packagist/dt/timwassenburg/default-model-order.svg?style=flat-square)](https://packagist.org/packages/timwassenburg/default-model-order)
[![License](https://img.shields.io/packagist/l/timwassenburg/default-model-order)](https://packagist.org/packages/timwassenburg/default-model-order)

## Features
This simple package adds a trait to your project that can be used to sort collections of a model by default by a specified column. As a result, the model looks more clean and readable.

## Installation
Install the package with composer.
```bash
composer require timwassenburg/default-model-order
```

## Usage
Once you have installed the package, you can import the ```DefaultOrder``` trait into your model to set the default order. Then, you can assign the desired column to the ```$orderBy``` variable to order by that column. Additionally, you may optionally set the ```$orderDirection``` variable to specify the direction of the order, with the default value being ```asc```.

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
Suppose you wish to modify the default column name or direction. In that case, you may publish the configuration file to make the necessary adjustments. To do so, run the following command:
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
