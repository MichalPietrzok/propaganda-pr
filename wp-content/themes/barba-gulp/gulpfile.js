const webpack = require('webpack-stream');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const csswring = require('csswring');
const autoprefixer = require('autoprefixer-core');
const concat = require('gulp-concat');
const browserSync = require('browser-sync');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const cache = require('gulp-cache');
const eslint = require('gulp-eslint');
const plumber = require('gulp-plumber');
const postscss = require('gulp-postcss');
const reporter = require('postcss-reporter');
const syntaxScss = require('postcss-scss');
const stylelint = require('stylelint');
const gutil = require('gulp-util');
const rename = require('gulp-rename');

const isProd = gutil.env.type === 'production';

const { src, dest, parallel, series, watch } = require('gulp');

const jsLoaders = () => {
  const loaders = [];

  if (isProd) {
    loaders.push({
      test: /\.(js)$/,
      exclude: /(node_modules)/,
      loader: 'babel-loader',
      query: {
        presets: ['@babel/env'],
        plugins: ['@babel/plugin-transform-runtime']
      }
    })
  } else {
    loaders.push({
      test: /\.js$/,
      exclude: /node_modules/,
      loader: 'eslint-loader',
      options: {
        // eslint options (if necessary)
      },
    })
  }
  return loaders;
}

// local_server-----------------
const browsersync = () => {
  browserSync.init({
    proxy: 'dev.propaganda-pr'
  })
}
exports.browsersync = browsersync
// -----------------local_serśver

// scripts-----------------------
const js = () => src([
  './src/scripts/app.js'
])
  .pipe(eslint({}))
  .pipe(webpack({
    mode: 'development',
    module: {
      rules: jsLoaders()
    }
  }))
  .pipe(rename(('app.js')))
  .pipe(dest('./dist/js'))
  .pipe(browserSync.stream())
  .pipe(eslint.format())
exports.js = js

// -----------------------scripts

// styles-----------------------
const styles = () => {
  const stylelintConfig = {
    rules: {
      'block-no-empty': true,
      'color-no-invalid-hex': true,
      'declaration-colon-space-after': 'always',
      'declaration-colon-space-before': 'never',
      'function-comma-space-after': 'always',
      'media-feature-colon-space-after': 'always',
      'media-feature-colon-space-before': 'never',
      'media-feature-name-no-vendor-prefix': true,
      'max-empty-lines': 5,
      'number-no-trailing-zeros': true,
      'property-no-vendor-prefix': true,
      'string-quotes': 'double',
      'value-no-vendor-prefix': true
    }
  }

  const scssProcessors = [
    stylelint(stylelintConfig),
    reporter({
      clearMessages: true,
      throwError: true
    })
  ]

  const processors = [
    csswring,
    autoprefixer({
      browsers: ['last 2 version']
    })
  ]
  return src('./src/styles/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(postscss(scssProcessors, { syntax: syntaxScss }))
    .pipe(isProd ? postcss(processors) : gutil.noop())
    .pipe(plumber({
      errorHandler: console.error
    }))
    .pipe(dest('./dist/css'))
    .pipe(browserSync.stream());
}
exports.styles = styles
// -----------------------styles

// css-libs-------------------
const cssLibs = () => src([
  './node_modules/cookieconsent/build/cookieconsent.min.css',
  './node_modules/bootstrap/dist/css/bootstrap-grid.min.css',
])
  .pipe(concat('libs.css'))
  .pipe(dest('./dist/css/'))
exports.cssLibs = cssLibs
// -------------------css-libs

// images-----------------------
const img = () => src('./src/img/**/*')
  .pipe(
    isProd
      ? cache(
        imagemin({
          interlaced: true,
          progressive: true,
          svgoPlugins: [
            {
              removeViewBox: false
            }
          ],
          use: [pngquant()]
        })
      ) : gutil.noop()
  )
  .pipe(dest('dist/img'))
exports.img = img
// -----------------------images

// fonts----------------------
const fonts = () => src('./src/fonts/**/*').pipe(dest('dist/fonts'))
exports.fonts = fonts

// delete cache and dist folder
const clear = () => cache.clearAll()
exports.clear = clear

const live = () => {
  watch('src/scripts/**/*.js', js)
  watch('src/styles/**/*.scss', parallel(cssLibs, styles))
  watch('src/img/**/*', img)
  watch('src/fonts/**/*', fonts)
  watch('./**/*.php', { usePolling: true }).on('change', browserSync.reload)
}
exports.live = live

exports.build = series(
  parallel(cssLibs, styles, js, img, fonts)
)

exports.default = series(
  parallel(cssLibs, styles, js, img, fonts),
  parallel(live, browsersync)
)
