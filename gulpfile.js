var gulp = require('gulp');
var requireDir = require('require-dir');
var tasks = requireDir('./gulp');

gulp.task('default', [
  'styles',
  'scripts',
  'images',
  'styles:watch',
  'scripts:watch',
  'images:watch'
]);

gulp.task('build', [
  'styles',
  'scripts',
  'images',
  'favicons'
]);
