var gulp = require('gulp');
var gulpCopy = require('gulp-copy');
var mkdirp = require('mkdirp');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');

// copies the Craft app directory to the right place.
gulp.task("init:app", function () {
    return gulp.src("./bower_components/craft/craft/app/**/*")
    .pipe(gulpCopy('./craft', { prefix: 3 }))
});

// creates an empty storage folder
gulp.task("init:storage", function () {
  mkdirp('./craft/storage', function (err) {
    if (err) console.error(err)
  });
});

// copies our example env config to a useful place.
gulp.task("init:env", function () {
  return gulp.src("example.env.php")
  .pipe(rename('.env.php'))
  .pipe(gulp.dest("."));
});

// copies the loadCSS snippet to templates.
gulp.task("init:loadcss", function () {
  return gulp.src("node_modules/fg-loadcss/src/loadCSS.js")
  .pipe(uglify())
  .pipe(rename('loadcss.js'))
  .pipe(gulp.dest("craft/templates/_partials/snippets/"));
});

// copies the onLoadCSS snippet to templates.
gulp.task("init:onloadcss", function () {
  return gulp.src("node_modules/fg-loadcss/src/onloadCSS.js")
  .pipe(uglify())
  .pipe(rename('onloadcss.js'))
  .pipe(gulp.dest("craft/templates/_partials/snippets/"));
});

// copies the fontfaceobserver snippet to templates.
gulp.task("init:fontfaceobserver", function () {
  return gulp.src("node_modules/fontfaceobserver/fontfaceobserver.js")
  .pipe(uglify())
  .pipe(rename('fontfaceobserver.js'))
  .pipe(gulp.dest("craft/templates/_partials/snippets/"));
});

gulp.task('init:js', ['init:loadcss', 'init:onloadcss', 'init:fontfaceobserver']);

gulp.task('init', ['init:app', 'init:storage', 'init:env', 'plugins', 'init:js']);
