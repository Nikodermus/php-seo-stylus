# PHP SEO Site + Stylus Boilerplate

This is a template meant for the creation of static websites allowing component reusing and highly SEO-friendly.

---

## Development

### Pre-requisites

-   This template is meant for global use, so global npm packages will be used, to install the all
    ```sh
    npm i -g stylus nib rupture
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

---

## Deployment

To create compiled and compressed styles

```sh
# delete previous files
rm-rf ./static/css/

# compile compressed
stylus -u nib -u rupture -c ./style/index.styl -o ./static/css/main.min.css
```

Once the site is live you can get your `sitemap.xml` with a [generator](https://www.xml-sitemaps.com/) and replace the placeholder one
