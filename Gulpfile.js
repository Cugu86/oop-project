var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var livereload = require('gulp-livereload');

gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        .pipe(livereload());
               
});

//Watch task
gulp.task('default',function() {
	livereload.listen();
    gulp.watch('sass/**/*.scss',['styles']);
});
