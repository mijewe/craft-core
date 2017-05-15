var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('autoprefixer', function () {
  return gulp.src('./public/assets/css/main.css')
  .pipe(autoprefixer({
    browsers: ['last 4 versions', 'ie >= 10'],
    cascade: false
  }))
  .pipe(gulp.dest('./public/assets/css'));
});
