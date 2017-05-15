var gulp = require('gulp');
var favicons = require('gulp-favicons');

gulp.task("favicons", function () {
    return gulp.src("./src/assets/img/favicon.png")
    .pipe(favicons({
      path: "{{ craft.config.rootUrl }}/assets/img/favicons",
      html: "craft/templates/_partials/snippets/favicons.html"
    }))
    .pipe(gulp.dest("./public/assets/img/favicons/"));
});
