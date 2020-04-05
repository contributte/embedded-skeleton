<h1 align=center>Skywind Project</h1>

<p align=center>
    Skiwind Project is a tech boosted web starter kit project for Nette Framework with <a href="https://tailwindcss.com/">TailwindCSS</a>, <a href="https://github.com/alpinejs/alpine">Alpine.js</a> and other libs by <a href="https://github.com/f3l1x">@f3l1x</a>.
</p>

<p align=center>
🕹 <a href="https://f3l1x.io">f3l1x.io</a> | 💻 <a href="https://github.com/f3l1x">f3l1x</a> | 🐦 <a href="https://twitter.com/xf3l1x">@xf3l1x</a>
</p>

<p align=center>
    <code>composer create-project -s dev planette/skywind-project acme</code>
</p>

<p align=center>
    <img src="https://raw.githubusercontent.com/planette/skywind-project/master/.docs/screenshot1.png">
</p>

[![Build Status](https://img.shields.io/travis/planette/skywind-project.svg?style=flat-square)](https://travis-ci.org/planette/skywind-project)
[![Join the chat](https://img.shields.io/gitter/room/contributte/contributte.svg?style=flat-square)](http://bit.ly/ctteg)

-----

## Installation

You will need `PHP 7.2+` and [Composer](https://getcomposer.org/).

Create project using composer.

```
composer create-project -s dev planette/skywind-project acme
```

Now you have application installed. It's time to run it.

## Startup

The easiest way is to use php built-in web server.

```
php -S 0.0.0.0:8000 -t www
```

Then visit [http://localhost:8000](http://localhost:8000) in your browser.

## Backend

It's based on [Contributte](https://contributte.org/) packages.

- [`contributte/application`](https://github.com/contributte/application)
- [`contributte/bootstrap`](https://github.com/contributte/bootstrap)
- [`contributte/di`](https://github.com/contributte/di)
- [`contributte/forms`](https://github.com/contributte/forms)
- [`contributte/http`](https://github.com/contributte/http)
- [`contributte/mail`](https://github.com/contributte/mail)
- [`contributte/utils`](https://github.com/contributte/utils)
- [`contributte/latte`](https://github.com/contributte/latte)
- [`contributte/tracy`](https://github.com/contributte/tracy)
- [`nette/robot-loader`](https://github.com/nette/robot-loader)

This project is using [RobotLoader](https://doc.nette.org/cs/3.0/robotloader) for autoloading .

## Frontend

There is also some assets included via `cdn`.

- [TailwindCSS 1.2.x](https://tailwindcss.com/)
- [Alpine.js 2.2.x](https://github.com/alpinejs/alpine)

## Development

See [how to contribute](https://contributte.org/contributing.html) to this package.

This package is currently maintaining by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **planette** development team.
Also thank you for using this project.
