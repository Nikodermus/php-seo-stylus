# PHP SEO Site + Stylus Boilerplate

This is a template meant for the creation of static websites allowing component reusing and highly SEO-friendly. Uses Stylus as preprocessor with a design system already in place.

---

## Development

### Pre-requisites

-   This template is meant for global use, so global npm packages will be used, to install them all
    ```sh
    npm install --global stylus rupture purgecss google-closure-compiler
    ```
-   Install PHP 5+

    ```sh
    # MacOS
    brew install php

    # Ubuntu
    sudo apt-get install php
    ```

### Running Project

-   Using `index.php` as entry point, run your PHP server.
-   Run and watch stylus
    ```
    stylus -u rupture -w -m ./style/index.styl -o ./static/css/main.min.css
    ```

### Initial Data

-   [ ] Change the metadata inside `pages/base/head.php`
-   [ ] Change the metadata inside `index.php`
-   [ ] Change the content and metadata for `404.php`
-   [ ] Include the fonts files in `static/fonts` and add the stylesheet with the `font-face` mixin in `style/library/fonts.styl`
-   [ ] Change the CSS colors and fonts for yours in `style/helpers/tokens.styl`
-   [ ] Remove or replace test image in `static/img/offline.jpg`
-   [ ] Replace meta images in `static/meta-img`
-   [ ] Replace `favicon.ico`
-   [ ] Fill info in `.htaccess`
-   [ ] Find and deleted/filled of the instances of the word `REPLACE-ME`, this ensures you don't have placeholder content.

### Creating pages

To create inner and transparent pages (no `.php` at the end), you can copy the `demo` folder and edit it as needed, all files are automatically attached to scripts and styles, or use

```sh
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

It's recommended to use a style guide, see [ESLint: WesBos Configuration](https://github.com/wesbos/eslint-config-wesbos)

### CSS with Stylus

This template uses stylus to pre-processing css, including autoprefix and import support, here are some hot tips to have in mind.

-   Include `.css` files and compress them into a single file, changing the extension to `.styl` and requiring them inside `style/index.styl`.
-   Create component styles, creating a `.styl` file inside `style/components`, all the files here are added by default.
-   This CSS build includes a design system, based on tokens, get to know this file `style/helpers/tokens.styl`, that way you can have a consistent look across your project.
-   This project include a couple mixins, get to know them how to use them and what they do checking out `style/components/demo.styl`, and with your [PHP server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver) enabled, see `localhost:3000/demo`.
-   This project uses `rupture`, a Stylus mixin library for `@media-query` and responsive management, see more at [Rupture](https://jescalan.github.io/rupture/). The scales used are defined in `style/helpers/tokens.styl`.

### Accesibility _A11Y_

This project uses `foody/a11y.css`, which is imported in the stylus pipeline to generate accesibility tips, errors and suggestions, this is meant for you to fix this issues on your side and this file is not meant for production use, read more about [a11y](https://ffoodd.github.io/a11y.css/index.html).

### VSCode

If you are working with Visual Studio Code, the following extensions might come to help:

-   `EditorConfig for VS Code` by EditorConfig
-   `ESLint` by Dirk Baeumer
-   `Manta's Stylus Supremacy` by Anantachai Saothong
-   `PHP Intelephense` by Ben Mewburn
-   `PHP Server` by brapifra
-   `Prettier - Code formatter` by Esben Petersen
-   `language-stylus` by sysoev

This project is already provided with a configuration using these plugins in `.vscode/settings.json` which you can override or delete.

You can use [PHP server](https://marketplace.visualstudio.com/items?itemName=brapifra.phpserver) to start the site, open `index.php`, a blue button on the top right corner of the tab will appear, you can click there to trigger the server, you can open your browser at `localhost:3000` to see the site if it doesn't automatically opens.

---

## Deployment

Remove the include to `a11y.styl` inside `style/index.styl`, this is meant for development purposes.

To create compiled, clean and compressed assets.

```sh
# compile compressed
stylus -u rupture -c ./style/index.styl -o ./static/css/main.min.css

# clean CSS
purgecss --css ./static/css/main.min.css --content **/*.php --out static/css

# compress JS
google-closure-compiler --js=js/main.js --js_output_file=js/main.js

# delete sources
rm -rf style demo; find . -name '*.map' -delete; find . -name '*.gitkeep' -delete; rm .editorconfig .prettierignore .prettierrc
```

Once the site is live you can get your `sitemap.xml` with a [generator](https://www.xml-sitemaps.com/) and replace the placeholder one
