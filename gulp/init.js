var gulp = require('gulp');
var gulpCopy = require('gulp-copy');
var mkdirp = require('mkdirp');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var run = require('gulp-run');

// pulls down the latest craft build and unzips it.
gulp.task("init:app", function () {
    return run("rm -f craft-latest.zip && rm -R -f craft-latest && rm -R -f craft/app && wget -O craft-latest.zip https://craftcms.com/latest.zip?accept_license=yes && unzip -q craft-latest.zip -d craft-latest && mv -f craft-latest/craft/app craft/app && mkdir -p craft/plugins craft/storage && rm -R craft-latest && rm craft-latest.zip").exec()
});

// copies our example env config to a useful place.
gulp.task("init:env", function () {
  return gulp.src("example.env.php")
  .pipe(rename('.env.php'))
  .pipe(gulp.dest("."));
});

// copies the cssrelpreload snippet to templates.
gulp.task("init:cssrelpreload", function () {
  return gulp.src("node_modules/fg-loadcss/src/cssrelpreload.js")
  .pipe(rename('cssrelpreload.js'))
  .pipe(gulp.dest("craft/templates/_partials/snippets/"));
});

// copies the fontfaceobserver snippet to templates.
gulp.task("init:fontfaceobserver", function () {
  return gulp.src("node_modules/fontfaceobserver/fontfaceobserver.js")
  .pipe(uglify())
  .pipe(rename('fontfaceobserver.js'))
  .pipe(gulp.dest("craft/templates/_partials/snippets/"));
});

gulp.task('init:js', ['init:cssrelpreload', 'init:fontfaceobserver']);

gulp.task('init', ['init:app', 'init:env', 'plugins', 'init:js']);
