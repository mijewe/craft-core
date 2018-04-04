var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var autoprefixerOptions = {
  browsers: ['last 4 versions', 'ie >= 10']
};

gulp.task('styles', function () {
  return gulp.src('./src/assets/scss/main.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('./public/assets/css'))
    .pipe(gulp.dest('./craft/templates/_partials/snippets/'));
});

gulp.task('styles:watch', function () {
  gulp.watch('./src/assets/scss/**/*.scss', ['styles']);
});
