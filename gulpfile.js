var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var cssmin = require('gulp-cssmin');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');

gulp.task( 'minify', function () {
  gulp.src('style.css')
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('.'));
});

gulp.task('sass', function() {
  var processors = [
    cssnext({browsers: ['last 2 version'], flexbox: 'no-2009'})
  ];
  return gulp.src(['sass/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(sass({outputStyle: 'expanded',}))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('.'));
});

gulp.task('default', function () {
  gulp.watch("sass/*.scss", ['sass', 'minify']);
});
