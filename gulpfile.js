var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');

gulp.task('scss', function(){
  return gulp.src('html_version/scss/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(autoprefixer({browsers: ['last 2 versions']}))
    .pipe(gulp.dest('html_version/css'))
    .pipe(browserSync.stream())
});

gulp.task('browserSync', function() {
    browserSync.init({
      server: {
          baseDir: "html_version/"
      }
  });
});

gulp.task('default', ['scss','browserSync'], function(){
  gulp.watch('html_version/scss/**/*.scss', ['scss']);
  gulp.watch("html_version/*.html").on('change', browserSync.reload);
});
