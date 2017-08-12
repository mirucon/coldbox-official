var gulp = require('gulp');
var sass = require('gulp-sass');
var pug = require('gulp-pug')
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var cssmin = require('gulp-cssmin');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');

gulp.task("pug", function() {
    gulp.src(["pug/*.pug"])
  .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
    .pipe(pug({pretty: true}))
    .pipe(rename({ extname: '.php' }))
    .pipe(gulp.dest("."))
});
gulp.task( 'minify', function () {
  gulp.src('style.css')
  .pipe(cssmin())
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest('.'));
});

gulp.task('sass', function() {
  var processors = [
    cssnext({browsers: ['last 2 version', 'iOS 8.4'], flexbox: 'no-2009'})
  ];
  return gulp.src(['sass/*.scss'])
  .pipe(sourcemaps.init())
  .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
  .pipe(sass({outputStyle: 'expanded',}))
  .pipe(postcss(processors))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('.'));
});

gulp.task('browser-sync', function () {
  browserSync({
    open: 'external',
    notify: false,
    proxy: "http://official-coldbox.dev/",
    port: "8000",
  });
});
gulp.task('bs-reload', function () {
  browserSync.reload();
});

gulp.task('default', ['browser-sync'], function () {
  gulp.watch("sass/*.scss", ['sass', 'bs-reload']);
  gulp.watch("pug/*.pug", ['pug', 'bs-reload']);
  gulp.watch("js/*.*", ['bs-reload']);
  gulp.watch("*.*", ['bs-reload']);
});
