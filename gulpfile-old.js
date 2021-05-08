// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var minifyCss = require('gulp-minify-css');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// Compile Our Sass
gulp.task('sass', function() {
  return gulp.src('assets/scss/*.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(gulp.dest('assets/css'));
});

// Concatenate & Minify CSS
gulp.task('css', function() {
  return gulp.src('assets/css/*.css')
    .pipe(concat('all.css'))
    .pipe(gulp.dest('assets/production'))
    .pipe(minifyCss({compatibility: 'ie9'}))
    .pipe(rename('all.min.css'))
    .pipe(gulp.dest('assets/production'));
});

// Lint Task
gulp.task('lint', function() {
  return gulp.src('assets/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
  return gulp.src([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/foundation/js/foundation.min.js',
    'assets/js/*.js'])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('assets/production'))
    .pipe(rename('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/production'));
});

// Watch Files For Changes
gulp.task('watch', function() {
  gulp.watch('assets/js/*.js', ['lint', 'scripts']);
  gulp.watch('assets/scss/*.scss', ['sass', 'css']);
});

// Default Task
gulp.task('default', ['lint', 'sass', 'css', 'scripts', 'watch']);
