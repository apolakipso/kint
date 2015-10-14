# Kint for Twig

Plugin for [Craft CMS](http://buildwithcraft.com/) to use [Kint](http://raveren.github.io/kint/) in [Twig](http://twig.sensiolabs.org/) templates.

### Usage

```
{{d(entry)}}
```

``{{d(v)}}`` is equivalent to ``d($v);`` or ``Kint::dump($v);``

### Text-only output
``{{s(v)}}`` is equivalent to ``s($v);``
