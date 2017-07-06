var gulp = require('gulp'),
    browsersync = require('browser-sync'),
    config = require('./minimalistico.config.js');

gulp.task('browsersync', function() {
    browsersync(config.browsersync);
});

gulp.task('copy-files', function() {
    return gulp.src(config.distFiles)
        .pipe(gulp.dest(config.themePathOnLocalServer));
});

gulp.task('browsersync-reload', ['copy-files'], function () {
    browsersync.reload();
});

gulp.task('default', ['browsersync'], function () {
    gulp.watch(config.distFiles, ['browsersync-reload']);
});
