let themeName = 'minimalistico';
let localDomain = 'api.themetester.dev';

module.exports = {
    theme: themeName,
    src: 'src',
    dist: `dist/${themeName}`,
    distFiles: `./dist/${themeName}/**/*`,
    themePathOnLocalServer: `/var/www/${localDomain}/wp-content/themes/${themeName}/`,
    browsersync: {
        open: 'external',
        host: localDomain,
        proxy: localDomain,
        port: 8080
    }
}
