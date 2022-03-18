# Twigcs Fractal

This extends the excellent 
[Twigcs](https://github.com/friendsoftwig/twigcs) to provide 
a ruleset for the 
[Fractal Render component](https://fractal.build/guide/components/including-sub-components.html#providing-context-data-to-sub-components).

# Installation

This is available as a package on packagist: https://packagist.org/packages/scotteuser/twigcs-fractal
```
composer require scotteuser/twigcs-fractal
```

# What does this do?

Consider the following Fractal code:
```twig
{% set card_label = 'Hello' %}
{% render "@card" with {
  label: card_label
} %}
```

Twigcs by default will consider `card_label` as an unused
variable because it does not know of Fractal's `render` tag.

# How do you use it?

Add a file `.twig_cs.dist` to your project root and change your
project to use this ruleset.
```php
<?php

return \FriendsOfTwig\Twigcs\Config\Config::create()
    ->setRuleSet(ScottEuser\FractalTwigcs\Ruleset\Fractal::class);
```
