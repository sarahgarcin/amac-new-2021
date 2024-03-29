/*

---------------------------------------
User settings
---------------------------------------

List all your JavaScript file in `userScripts` to define
their order of concatenation.

List all the JavaScript plugin file you are using in `pluginScripts`
to define their order of concatenation.

Managing more than one SCSS/CSS is made with @imports in SCSS.

To enable automatic reloading on .js and .scss files compilation,
as well as other niceties from [browser sync](https://www.browsersync.io/)
write your local dev url in the localDevUrl variable.

*/

var pluginsScripts = [
  'bower_components/jquery/dist/jquery.min.js',
  'bower_components/jquery-ui/jquery-ui.min.js',
  'assets/js/libs/jquery.ui.touch-punch.min.js',
  'node_modules/@fancyapps/ui/dist/fancybox.umd.js'
];
var userScripts = [
  'assets/js/main.js'
];

var localDevUrl = '';

var pluginsCss = [
  'node_modules/@fancyapps/ui/dist/fancybox.css',
  'assets/css/flexboxgrid.min.css'
];

/*

---------------------------------------
Gulp definition
---------------------------------------

By default you don’t have to configure anything to
make Gulp work.

gulp `default` task are “lint”, “css”, “script-plugins”, “scripts”.
gulp `dev-watch` task execute “lint” and “script-plugins” from `userScripts`
and “scss” from `assets/scss/*`.

*/

// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();
var concat       = require('gulp-concat');
var jshint       = require('gulp-jshint');
var sass         = require('gulp-sass');
var nano         = require('gulp-cssnano');
var plumber      = require('gulp-plumber');
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');



// Compile our SCSS
gulp.task('scss', function() {
  return gulp.src( 'assets/scss/main.scss')
    .pipe(plumber({
        errorHandler: function (err) {
          console.log(err.formatted);
          this.emit('end');
        }
    }))
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 3 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});



// Prefix & Minify CSS
gulp.task('css', ['scss'], function (done) {
  return gulp.src([
      'assets/css/*.css',
    ])
    .pipe(nano({discardComments: {removeAll: true}}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/production'));
});

// Concatenate CSS plugin
gulp.task('css-plugins', function() {
  return gulp.src(pluginsCss)
    .pipe(concat('plugins.css'))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});



// Lint Task
gulp.task('lint', function() {
  return gulp.src( userScripts)
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});



// Concatenate JS plugin
gulp.task('script-plugins', function() {
  return gulp.src(pluginsScripts)
    .pipe(concat('plugins.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(browserSync.stream());
});



// Concatenate JS plugin with user scripts and minify them.
gulp.task('scripts', ['script-plugins'], function (done) {
  return gulp.src(['assets/js/plugins.js'].concat(userScripts))
    .pipe(concat('all.js'))
    .pipe(gulp.dest('assets/production'))
    .pipe(rename('all.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/production'));
});



// Live reload sync on every screen connect to localhost
gulp.task('init-live-reload', function() {
  browserSync.init({
    proxy: localDevUrl,
    files: ['!site/accounts/', 'site/**/*.php', 'content/**/*.txt'],
  });
});



// Watch Files For Changes
gulp.task('dev-watch', function() {
  gulp.watch( userScripts, ['lint', 'script-plugins', 'css-plugins']);
  gulp.watch( 'assets/scss/*.scss', ['scss']);
});



// Watch Files For Changes with live reload sync on every screen connect to localhost.
gulp.task('dev-watch-sync', ['init-live-reload', 'dev-watch']);



// Production Task
gulp.task('prod', ['lint', 'scss', 'css', 'script-plugins', 'scripts', 'css-plugins']);



// Default Task
gulp.task('default', ['prod']);
