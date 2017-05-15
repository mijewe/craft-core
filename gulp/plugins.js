var gulp = require('gulp');
var gulpCopy = require('gulp-copy');

gulp.task("plugin:anchor", function () {
    return gulp.src("./bower_components/craft-anchor/anchor/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:cachey", function () {
    return gulp.src("./bower_components/craft-cachey/cachey/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:emailwrap", function () {
    return gulp.src("./bower_components/craft-emailwrap/emailwrap/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:refreshstring", function () {
    return gulp.src("./bower_components/craft-refreshstring/refreshstring/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:typogrify", function () {
    return gulp.src("./bower_components/typogrify/typogrify/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:contactform", function () {
    return gulp.src("./bower_components/contactform/contactform/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:redirectmanager", function () {
    return gulp.src("./bower_components/redirectmanager/redirectmanager/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:jsontransforms", function () {
    return gulp.src("./bower_components/craft-jsontransforms/jsontransforms/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:jsonreader", function () {
    return gulp.src("./bower_components/craft-jsonreader/jsonreader/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task('plugins', ["plugin:anchor", "plugin:cachey", "plugin:emailwrap", "plugin:refreshstring", "plugin:typogrify", "plugin:contactform", "plugin:redirectmanager", "plugin:jsontransforms", "plugin:jsonreader"]);
