//var gulp = require('gulp'); 

// import gulp from 'gulp';

// function defaultTask(cb) {
//   // place code for your default task here
//   console.log('katugon ka?');
//   cb();
// }
// exports.default = defaultTask


import gulp from 'gulp';
import yargs from 'yargs';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpIf from 'gulp-if';
import sourceMaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass)

// const PRODUCTION = yargs.argv.prod;
const paths = {
  styles: {
    src: ['styles/customThemeStyles.css', 'styles/slider.css'],
    dest: 'dist/assets/css'
  }
}

// export const styles = () => {
//   return gulp.src(paths.styles.src)
//     .pipe(sourceMaps.init())
//     .pipe(sass().on('error', sass.logError))
//     .pipe(sourceMaps.write())
//     .pipe(gulp.dest(paths.styles.dest));
//   };

export const build = () => {
  return gulp.src(paths.styles.src)
  .pipe(sass().on('error', sass.logError))
  .pipe(cleanCss({compatibility: 'ie8'}))
  .pipe(gulp.dest(paths.styles.dest));
}

export const watch = () => {
  gulp.watch('styles/*.css')
}