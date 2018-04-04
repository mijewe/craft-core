var gulp = require('gulp');
var gulpCopy = require('gulp-copy');

gulp.task("plugin:anchor", function () {
    return gulp.src("./node_modules/craft-anchor/anchor/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:emailwrap", function () {
    return gulp.src("./node_modules/craft-emailwrap/emailwrap/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});


gulp.task("plugin:filesize", function () {
    return gulp.src("./node_modules/craft-filesize/filesize/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:refreshstring", function () {
    return gulp.src("./node_modules/craft-refreshstring/refreshstring/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:contactform", function () {
    return gulp.src("./node_modules/ContactForm/contactform/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:jsontransforms", function () {
    return gulp.src("./node_modules/craft-jsontransforms/jsontransforms/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:jsonreader", function () {
    return gulp.src("./node_modules/craft-jsonreader/jsonreader/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:imager", function () {
    return gulp.src("./node_modules/Imager-Craft/imager/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task("plugin:fastcgicachebust", function () {
    return gulp.src("./node_modules/fastcgicachebust/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 1 }))
});

gulp.task("plugin:redirectmanager", function () {
    return gulp.src("./node_modules/Craft-Plugin--Redirect-Manager/redirectmanager/**/*")
    .pipe(gulpCopy('./craft/plugins/', { prefix: 2 }))
});

gulp.task('plugins', ["plugin:anchor", "plugin:emailwrap", "plugin:refreshstring", "plugin:contactform", "plugin:jsontransforms", "plugin:jsonreader", "plugin:imager", "plugin:fastcgicachebust", "plugin:redirectmanager", "plugin:filesize"]);
