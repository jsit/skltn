'use strict';

var gulp = require('gulp');
var sass = require('gulp-dart-sass');

gulp.task('sass', function () {
  return gulp.src('./stylesheets/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('sass-editor', function () {
  return gulp.src('./stylesheets/scss/style-editor.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./stylesheets/css/'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./stylesheets/scss/**/*.scss', gulp.parallel('sass', 'sass-editor'));
});

gulp.task('default', gulp.parallel('sass:watch'));
