let config = require('./minimalistico.config');
let mix = require('laravel-mix');

// Variable for "npm run setup" script.
let isSetup = (process.env.NODE_ENV === 'setup');

if (isSetup) {
    // Setup the project.
    mix.copyDirectory('node_modules/uikit/src/scss', `${config.src}/assets/scss/uikit`);
} else {
    // Client files.
    mix.js(`${config.src}/assets/js/admin/admin.js`, `${config.dist}/assets/js/admin`)
        .js(`${config.src}/assets/js/app.js`, `${config.dist}/assets/js`)
        //.extract(['jquery', 'vue', 'vue-router', 'axios', 'uikit'])

        .sass(`${config.src}/assets/scss/app.scss`, `${config.dist}/assets/css/app.css`).options({
            processCssUrls: false
        })
        .sass(`${config.src}/assets/scss/admin/editor-style.scss`, `${config.dist}/assets/css/admin`)

        .copy(`${config.src}/screenshot.png`, `${config.dist}/screenshot.png`)
        .copy(`${config.src}/readme.txt`, `${config.dist}/readme.txt`)
        .copy(`${config.src}/style.css`, `${config.dist}/style.css`)
        .copy(`${config.src}/*.php`, `${config.dist}/`)
        //.copy(`mix-manifest.json`, `${config.dist}/`) Not using it for now..

        .copyDirectory(`${config.src}/inc`, `${config.dist}/inc`)
        .copyDirectory(`${config.src}/partials`, `${config.dist}/partials`)
        .copyDirectory(`${config.src}/languages`, `${config.dist}/languages`)
        .copyDirectory(`${config.src}/page-templates`, `${config.dist}/page-templates`)
        .copyDirectory(`${config.src}/assets/images`, `${config.dist}/assets/images`)
        .copyDirectory(`${config.src}/assets/videos`, `${config.dist}/assets/videos`)
        .copyDirectory(`${config.src}/assets/fonts`, `${config.dist}/assets/fonts`);
}
