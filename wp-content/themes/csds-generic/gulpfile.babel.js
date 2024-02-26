//var gulp = require('gulp'); 

// import gulp from 'gulp';

// function defaultTask(cb) {
//   // place code for your default task here
//   console.log('katugon ka?');
//   cb();
// }
// exports.default = defaultTask

// gulp.task('hello', function(done){
//   console.log('hello, gutom na ka?');
//   done();
//   });


import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';

const PRODUCTION = yargs.argv;
const sass = require('gulp-sass')(require('sass'));

export const styles = () => {
  return gulp.src('src/assets/scss/bundle.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/asset/css'));
}

// export default hello;