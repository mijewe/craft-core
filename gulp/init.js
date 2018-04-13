var gulp = require('gulp');
var rename = require("gulp-rename");

// copies our example env config to a useful place.
gulp.task("init:env", function () {
  return gulp.src(".env.example")
  .pipe(rename('.env'))
  .pipe(gulp.dest("."));
});
