var gulp = require('gulp');
var favicons = require('gulp-favicons');

gulp.task("favicons", function () {
    return gulp.src("./src/assets/img/favicon.png")
    .pipe(favicons({
      path: "{{ siteUrl }}/assets/img/favicons",
      html: "templates/_partials/favicons.html"
    }))
    .pipe(gulp.dest("./web/assets/img/favicons/"));
});
