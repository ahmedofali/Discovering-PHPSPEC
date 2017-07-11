var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

gulp.task('test', function() {
    gulp.src('spec/**/*.php')
        .pipe(plumber())
        .pipe(phpspec('', { 'verbose': 'v', notify: true }))
        .on('error', notify.onError({
            title: "Error",
            message: "Your tests failed, Ahmed!",
            icon: __dirname + '/pic.jpg'
        }))
        .pipe(notify({
            title: "Success",
            message: "Every thing is Working"
        }));
});

gulp.task('watch', function() {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);