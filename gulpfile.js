'use strict';

var gulp = require('gulp');
var sass = require('gulp-dart-sass');
var readme = require('gulp-readme-to-markdown');
var wpPot = require('gulp-wp-pot');

gulp.task('pot', function() {
  return gulp.src('./**/*.php')
    .pipe(wpPot( {
      domain: 'skltn',
      package: 'skltn'
    } ))
    .pipe(gulp.dest('languages/skltn.pot'));
});

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

gulp.task('watch', function () {
  gulp.watch('./stylesheets/scss/**/*.scss', gulp.parallel('sass', 'sass-editor'));
  gulp.watch('./**/*.php', gulp.task('pot'));
  gulp.watch('./readme.txt', gulp.task('readme'));
});

gulp.task('readme', async function() {
  gulp.src('readme.txt')
    .pipe(readme())
    .pipe(gulp.dest('./'));
});

gulp.task('default', gulp.series('pot', 'readme', 'sass', 'sass-editor', 'watch'));
