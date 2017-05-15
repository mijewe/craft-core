var gulp = require('gulp');
var requireDir = require('require-dir');
var tasks = requireDir('./gulp');

gulp.task('default', [
  'styles',
  'scripts',
  'styles:watch',
  'scripts:watch'
]);
