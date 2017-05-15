var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('scripts', function() {
  return gulp.src([
      'bower_components/lazysizes/lazysizes.js',
      'bower_components/picturefill/dist/picturefill.js',
      './src/assets/js/core.js',
      './src/assets/js/main.js'
    ])
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./public/assets/js/'));
});

gulp.task('scripts:watch', function () {
  gulp.watch('./src/assets/js/**/*.js', ['scripts']);
});
