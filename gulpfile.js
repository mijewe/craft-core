var gulp = require('gulp');
var requireDir = require('require-dir');
var tasks = requireDir('./gulp');

// gulp.task('styles', ['sass']);
//
// gulp.task('styles:watch', function () {
//   gulp.watch('./src/assets/scss/**/*.scss', ['styles']);
// });

gulp.task('default', [
  'styles',
  'styles:watch'
]);
