# Twigcs Fractal

This extends the excellent 
[Twigcs](https://github.com/friendsoftwig/twigcs) to provide 
a ruleset for the 
[Fractal Render component](https://fractal.build/guide/components/including-sub-components.html#providing-context-data-to-sub-components).

Consider the following Fractal code:
```twig
{% set card_label = 'Hello' %}
{% render "@card" with {
  label: card_label
} %}
```

Twigcs by default will consider `card_label` as an unused
variable because it does not know of Fractal's `render` tag.