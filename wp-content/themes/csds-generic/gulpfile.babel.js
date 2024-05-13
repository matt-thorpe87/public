import gulp from 'gulp';
import yargs from 'yargs';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpIf from 'gulp-if';
import sourceMaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import uglify from 'gulp-uglify';
import zip from 'gulp-zip';
import concat from 'gulp-concat';

const sass = gulpSass(dartSass)

// Paths array for source and destination of files and folders //
const paths = {
  blockstyles: {
    src: ['template_parts/blocks/*/**.scss'],
    dest: 'dist/assets/css'
  },
  styles: {
    src: ['styles/customThemeStyles.css'],
    dest: 'dist/assets/css'
  },
  images: {
    src: ['src/assets/images/**/*.{jpg,jpeg,png,svg,gif}', 'src/mysource_files/**/*.{jpg,jpeg,png,svg,gif}'],
    dest: 'dist/assets/images'
  },
  scripts: {
    src:  'src/assets/js/search.js',
    dest: 'dist/assets/js'
  },
  other: {
    src: ['src/assets/**/*', '!src/assets/{images,js,scss}/**/*'],
    dest: 'dist/assets'
  },
  package: {
    src: ['**/*', '!src{,/**}', '!node_modules{,/**}', '!packaged{,/**}', '!babelrc', '!gulpfile.babel.js', '!package.json', '!package-lock.json', '!styles{,/**}'],
    dest: 'packaged'
  },
}
export const blockstyles = () => {
  return gulp.src(paths.blockstyles.src)
  .pipe(sass().on('error', sass.logError))
  .pipe(concat("customBlocks.css"))
  .pipe(cleanCss({compatibility: 'ie8'}))
  .pipe(gulp.dest(paths.blockstyles.dest));
}

export const styles = () => {
  return gulp.src(paths.styles.src)
  .pipe(sass().on('error', sass.logError))
  .pipe(cleanCss({compatibility: 'ie8'}))
  .pipe(gulp.dest(paths.styles.dest));
}

export const watch = () => {
  gulp.watch('styles/**/*.css', styles);
  gulp.watch('src/assets/js/**/*.js', scripts);
  gulp.watch(paths.other.src, copy);
  gulp.watch(paths.images.src, images);
}

export const scripts = () => {
  return gulp.src(paths.scripts.src)
  // .pipe(webpack({
  //   mode: "production",
  //   module: {
  //     rules: [
  //       {
  //         test: /\.js$/,
  //         use: {
  //           loader: 'babel-loader',
  //           options: {
  //             presets: ['@babel/preset-env']
  //           }
  //         }
  //       }
  //     ]

  //     },
  //     output: {
  //       filename: 'bundle.js'
  //   }
  // }))
  .pipe(uglify())
  .pipe(gulp.dest(paths.scripts.dest));
}

export const images = () => {
  return gulp.src(paths.images.src)
  // .pipe(gulpIf(production, imagemin()))
  .pipe(imagemin())
  .pipe(gulp.dest(paths.images.dest));
}

export const copy = () => {
  return gulp.src(paths.other.src)
  .pipe(gulp.dest(paths.other.dest));
}

export const clean = (done) => {
  gulp.task(del([ 'dist' ]));
  done();
}

export const compress = () => {
  return gulp.src(paths.package.src)
  .pipe(zip('csds-generic.zip'))
  .pipe(gulp.dest(paths.package.dest));
}

// not working yet when dist file is not present - gulp if empty don't clean(?)
export const dev = gulp.series(clean, gulp.parallel(blockstyles, styles, images, copy, scripts), watch);
export const build = gulp.series(clean, gulp.parallel(blockstyles, styles, images, copy, scripts));


