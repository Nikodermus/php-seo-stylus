# PHP SEO Site + Stylus Boilerplate

This is a template meant for the creation of static websites allowing component reusing and highly SEO-friendly.

---

## Development

### Pre-requisites

-   This template is meant for global use, so global npm packages will be used, to install them all
    ```sh
    npm i -g stylus nib rupture purgecss
    ```
-   Install PHP 5+

    ```sh
    # MacOS
    brew install php

    # Ubuntu
    sudo apt-get install php
    ```

### Running Project

-   In order to have linting and formatting, use [PHP Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
-   Start [PHP server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver), or use your own.
-   Run and watch stylus
    ```
    stylus -u nib -u rupture -w -m ./style/index.styl -o ./static/css/main.min.css
    ```

### Initial Data

-   [ ] Change the metadata inside `pages/base/head.php`
-   [ ] Change the metadata inside `index.php`
-   [ ] Include the fonts files in `static/fonts` and add the stylesheet with the `@font-face` mixin in `style/library/fonts.styl`
-   [ ] Change the CSS colors and fonts for yours in `style/helpers/variables.styl`
-   [ ] Replace offline image in `static/img/offline.jpg`
-   [ ] Replace meta images in `static/meta-img`
-   [ ] Replace `favicon.ico`
-   [ ] Fill info in `.htaccess`
-   [ ] Fill info in `site.appcache` (This info needs to be changed in each release)

### Creating pages

To create inner and transparent pages (no `.php` at the end), you can copy the `demo` folder and edit it as needed, all files are automatically attached to scripts and styles, or use

```
cp -r demo <ROUTE>
```

### Creating reusable components

If you need markup that you can reuse through multiple sites, the place to do it is in `pages/lib/component.php`

And you can add this new component in the way of

```php
<?php
// Relative route to the component file
require '../pages/lib/component.php';
?>
```

This will add the HTML right in where you add the php tag.

### Working with Javascript

This project is meant to be work with Vainilla Javascript and has an initial JS file, `js/main.js`, you can add more files in the `js` folder and having them connected in `pages/base/scripts.php`

```html
<script type="application/javascript" src="/js/file.js"></script>
```

You can add external javascript files inside `static/vendor`. This project offers retina support with [RetinaJS](http://imulus.github.io/retinajs/)

---

## Deployment

To create compiled, clean and compressed styles

```sh
# delete previous files
rm -rf ./static/css/

# compile compressed
stylus -u nib -u rupture -c ./style/index.styl -o ./static/css/main.min.css

# clean CSS
purgecss --css ./static/css/main.min.css --content **/*.php --out static/css
```

Once the site is live you can get your `sitemap.xml` with a [generator](https://www.xml-sitemaps.com/) and replace the placeholder one
