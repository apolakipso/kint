# Kint for Twig

Plugin for [Craft CMS](http://buildwithcraft.com/) to use [Kint](http://raveren.github.io/kint/) in [Twig](http://twig.sensiolabs.org/) templates.

## Installation

* Download or clone
* Put folder ``kint`` into ``craft/plugins``
* Run ``$ composer install``
* Enable plugin
* Configure plugin

## Configuration

The ``mode`` option determines whether the plugin outputs anything:

* **On** Always enabled
* **Off** Always disabled
* **devMode** Enabled when in ``devMode``

## Usage

```
{{d(entry)}}
```

``{{d(v)}}`` is equivalent to ``d($v);`` or ``Kint::dump($v);``

## Text-only output
``{{s(v)}}`` is equivalent to ``s($v);``

## TODO

Check what the Twig environment contains to display info on the current template / call stack.

