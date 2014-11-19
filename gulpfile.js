/* init gulp plugins */ 
var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    uglify = require('gulp-uglify'),
    gutil = require('gulp-util'),
    sass = require('gulp-ruby-sass'),       
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    prefix = require('gulp-autoprefixer'),   
    imagemin = require('gulp-imagemin'),
    pngcrush = require('imagemin-pngcrush'),
    notify = require('gulp-notify'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload;   

/* set variables */ 
var env,
    jsSources,
    htmlSources,
    sassSources,
    outputDir;

/* state of developing */ 
env = process.env.NODE_ENV || 'development';
 
if (env === 'development'){
/*  outputDir = 'html/';                        REMOVE*/
  sassStyle = 'expanded';
} else {
/*  outputDir = 'builds/production/';           REMOVE*/ 
  sassStyle = 'compressed';
}

jsSources   =   ['assets/js/**/*.js'];
sassSources =   ['assets/sass/**/*.scss'];
imgSources  =   ['assets/img/**/*.*'];
/*
htmlSources = [outputDir + '*.html'];
                                                REMOVE*/

gulp.task('images', function () {
    return gulp.src('assets/img/**/*.*')
    .pipe(newer(outputDir + 'img'))
    .pipe(imagemin({
        optimizationLevel: 7,
        interlaced: true,
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use:[pngcrush()]
      }))
      .pipe(gulp.dest(outputDir + 'img'))
/*      .pipe(gulpif(env === 'production', gulp.dest(outputDir + 'img'))) */
      .pipe(plumber())
      .pipe( notify({ message: "Images tasks have been completed!"}) );
});


