<br/>
<p align="center">
    <img src="img/php-design-patterns.png" alt="Logo" width="550" height="180">
</p>

<h3 align="center">Structural Patterns</h3>

  <p align="center">
    Just a playground about structural patterns in PHP 
  </p>

## Table Of Contents

* [About the Project](#about-the-project)
* [Built With](#built-with)
* [Getting Started](#getting-started)
    * [Prerequisites](#prerequisites)
    * [Installation](#installation)
* [Usage](#usage)
* [Authors](#authors)
* [References](#references)

## About The Project

Just a playground in PHP about structural patterns:

* Adapter Pattern
* Bridge Pattern
* Composite Pattern
* Decorator Pattern
* Facade Pattern
* Proxy Pattern


## Built With

PHP & Symfony framework

## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.

* docker

```sh
docker-compose build && docker-compose up -d
```

* composer
```sh
composer install
```

### Installation

1. Get a docker at [https://www.docker.com/](https://www.docker.com/)


2. Clone the repo

```sh
git clone https://github.com/fperezco/structural_patterns.git
```

3. Go inside docker machine and Install Composer packages

```sh
 docker-compose exec apache-php composer install
```


## Usage

Feel free to go into **/src** to take a look patterns or execute tests concerning them in the **/tests** folder.

## Authors

* **Paco Pérez** - *Full Stack Developer* - [Paco Perez](https://github.com/fperezco)

## References

* [RefactoringGuru](https://refactoring.guru/)
* [DesignPattersInPhp](https://designpatternsphp.readthedocs.io)
* [PhpNet](https://www.php.net/)
