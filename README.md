# Sticky Sidenav Blog

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/clamours/sticky-sidenav-blog.svg)](https://packagist.org/packages/clamours/sticky-sidenav-blog) [![Total Downloads](https://img.shields.io/packagist/dt/clamours/sticky-sidenav-blog.svg)](https://packagist.org/packages/clamours/sticky-sidenav-blog)

A [Flarum](http://flarum.org)  extension. Make the [Blog](https://github.com/v17development/flarum-blog) sidebar section sticky and scrollable.

## Motivation

Usually when we make the sidenav section sticky, we have to scroll to the bottom of the page to view the tags that are not shown in the first place. This extension resolves the problem by making the sidenav scrollable, which can be useful when using the [AutoMore](https://github.com/noriods/automore) extension.

## Scrollbar

The scrollbar will appear only if there are too many tags AND the mouse is hovering above the sidenav. Example:

![example](https://user-images.githubusercontent.com/32540679/163013496-24d16893-b3af-46fb-9b80-3b11e66940c7.gif)


## Installation

Install with composer:

```sh
composer require clamours/sticky-sidenav-blog
```

## Updating

```sh
composer update clamours/sticky-sidenav-blog
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/ecnu-im/sticky-sidenav)
- [GitHub](https://github.com/ECNU-Forum/sticky-sidenav)
- [Discuss](https://discuss.flarum.org/d/30579-sticky-sidenav)
