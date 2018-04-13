var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('scripts', function() {
  return gulp.src([
      'node_modules/lazysizes/lazysizes.js',
      'node_modules/picturefill/dist/picturefill.js',
      './src/assets/js/core.js',
      './src/assets/js/main.js'
    ])
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./web/assets/js/'));
});

gulp.task('scripts:snippets', function() {
  return gulp.src([
      'node_modules/fg-loadcss/src/cssrelpreload.js',
      'node_modules/fontfaceobserver/fontfaceobserver.js'
    ])
    .pipe(gulp.dest('templates/_snippets/js/'));
});

gulp.task('scripts:watch', function () {
  gulp.watch('./src/assets/js/**/*.js', ['scripts']);
});
