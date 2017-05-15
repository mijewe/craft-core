var gulp = require('gulp');
var svgmin = require('gulp-svgmin');

gulp.task('svgmin', function() {
  return gulp.src('./src/assets/img/svg/**/*.svg')
    .pipe(svgmin())
    .pipe(gulp.dest('./craft/templates/_partials/snippets/svg/'))
    .pipe(gulp.dest('./public/assets/img/svg/'));
});

gulp.task('images', ['svgmin']);

gulp.task('images:watch', function () {
  gulp.watch('./src/assets/img/**/*.*', ['images']);
});
