const { dest, parallel, series, src, watch } = require('gulp')
const cleanCss = require('gulp-clean-css')
const header = require('gulp-header')
const purgecss = require('gulp-purgecss')
const sass = require('gulp-sass')

const themeText = `
/*
Theme Name: PR Resolution
Theme URI: http://github.com/Propellernet/resolutionwptheme
Author: CoverageBook
Author URI: http://resolution.coveragebook.com
Description: For the blog
Version: 0.1
License: Copyright CoverageBook 2020
*/
`

const paths = {
  css: {
    src: ['scss/**/*.scss']
  },
  purge: {
    src: ['prresolution/**/*.php']
  }
}

// const clean = () => del(['_site/**/*'])

function css () {
  return src(['scss/*.scss'])
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(purgecss({ content: paths.purge.src }))
    .pipe(cleanCss())
    .pipe(header(themeText))
    .pipe(dest('prresolution/'))
}

const watchCss = () => watch(paths.css.src + paths.purge.src, { ignoreInitial: false }, series(css))
const dev = series(css, parallel(watchCss))

exports.css = css
exports.default = dev
