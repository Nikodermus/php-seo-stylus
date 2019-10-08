# PHP SEO Site + Stylus Boilerplate

This is a template meant for the creation of static websites allowing component reusing and highly SEO-friendly.

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

---

## Deployment

To create compiled and compressed styles

```sh
# delete previous files
rm-rf ./static/css/

# compile compressed
stylus -u nib -u rupture -c ./style/index.styl -o ./static/css/main.min.css
```
