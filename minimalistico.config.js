let themeName = 'minimalistico';
let localDomain = 'your-domain.dev';

module.exports = {
    theme: themeName,
    src: './src',
    dist: `./dist/${theme}`,
    distFiles: `./dist/${theme}/**/*`,
    themePathOnLocalServer: `/var/www/${localDomain}/wp-content/themes/${themeName}/`,
    browsersync: {
        open: 'external',
        host: localDomain,
        proxy: localDomain,
        port: 8080
    }
}
