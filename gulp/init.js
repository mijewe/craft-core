var gulp = require('gulp');
var gulpCopy = require('gulp-copy');
var mkdirp = require('mkdirp');
var rename = require("gulp-rename");

gulp.task("init:app", function () {
    return gulp.src("./bower_components/craft/craft/app/**/*")
    .pipe(gulpCopy('./test', { prefix: 2 }))
});

gulp.task("init:storage", function () {
  mkdirp('./test/craft/storage', function (err) {
    if (err) console.error(err)
  });
});

gulp.task("init:env", function () {
  return gulp.src("example.env.php")
  .pipe(rename('.env.php'))
  .pipe(gulp.dest("."));
});

gulp.task('init', ['init:app', 'init:storage', 'init:env']);
