let config = require('./themester.config');
let mix = require('laravel-mix');

mix.js(`${config.src}/assets/js/app.js`, `${config.dist}/assets/js`)
    .extract(['jquery', 'vue', 'axios', 'vue-router'])
    .sass(`${config.src}/assets/scss/app.scss`, `${config.dist}/assets/css/app.css`)
    .sass(`${config.src}/assets/scss/admin/editor-style.scss`, `${config.dist}/assets/css/admin`)
    .copy(`${config.src}/screenshot.png`, `${config.dist}/screenshot.png`)
    .copy(`${config.src}/style.css`, `${config.dist}/style.css`)
    .copy(`${config.src}/*.php`, `${config.dist}/`)
    .copyDirectory(`${config.src}/inc`, `${config.dist}/inc`)
    .copyDirectory(`${config.src}/partials`, `${config.dist}/partials`)
    .copyDirectory(`${config.src}/languages`, `${config.dist}/languages`)
    .copyDirectory(`${config.src}/page-templates`, `${config.dist}/page-templates`)
    .copyDirectory(`${config.src}/assets/images`, `${config.dist}/assets/images`)
    .copyDirectory(`${config.src}/assets/videos`, `${config.dist}/assets/videos`)
    .copyDirectory(`${config.src}/assets/fonts`, `${config.dist}/assets/fonts`)
    .copy(`mix-manifest.json`, `${config.dist}/`);
