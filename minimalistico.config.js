let themeName = 'minimalistico';
// Set local IP address (192.168.0.10) to connect from your local network.
let localHost = 'api.themetester.dev';
let localDomain = 'api.themetester.dev';

module.exports = {
    theme: themeName,
    src: 'src',
    dist: `dist/${themeName}`,
    distFiles: `dist/${themeName}/**/*`,
    themePathOnLocalServer: `/var/www/${localDomain}/wp-content/themes/${themeName}/`,
    browsersync: {
        open: 'external',
        host: localHost,
        proxy: localDomain,
        port: 8080
    }
}
