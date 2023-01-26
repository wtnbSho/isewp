//----------------------------------------------------------------------
//  mode
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  require
//----------------------------------------------------------------------
const gulp = require("gulp");
const { src, dest, series, parallel, watch } = require("gulp");

const dartSass = require("gulp-sass")(require("sass"));

const del = require("del");
const bs = require("browser-sync");
const pngquant = require("imagemin-pngquant");
const mozjpeg = require("imagemin-mozjpeg");

const cssdeclsort = require("css-declaration-sorter");
const crypto = require("crypto");
const hash = crypto.randomBytes(8).toString("hex");

const $ = require("gulp-load-plugins")();

//----------------------------------------------------------------------
//  path
//----------------------------------------------------------------------
const proj = {
  dev: "./src",
  pro: "./dist",
};

const paths = {
  clean: {
    src: `${proj.pro}/**`,
    wpSrc: ["./css", "./js", "./images"],
  },
  css: {
    src: `${proj.dev}/css/*.css`,
    dest: `${proj.pro}/css/`,
    wpDest: `./css/`,
  },
  cssOthers: {
    src: `${proj.dev}/css/**`,
    dest: `${proj.pro}/css/`,
    wpDest: `./css/`,
  },
  html: {
    src: `${proj.dev}/**/*.html`,
    dest: `${proj.pro}/`,
    wpDest: "./",
  },
  php: {
    src: `${proj.dev}/**/*.php`,
    dest: `${proj.pro}/`,
    wpDest: `./`,
  },
  images: {
    src: `${proj.dev}/images/**`,
    dest: `${proj.pro}/images`,
    wpDest: `./images`,
  },
  js: {
    src: `${proj.dev}/js/**/*.js`,
    dest: `${proj.pro}/js`,
    wpDest: `./js`,
  },
  scss: {
    src: `${proj.dev}/scss/**.scss`,
    dest: `${proj.dev}/css/`,
    wpDest: `./css/`,
  },

  watch: {
    src: [`${proj.dev}/**`, `!${proj.dev}/css/**`],
    wpSrc: [
      `${proj.dev}/images/**`,
      `${proj.dev}/js/**`,
      `${proj.dev}/scss/**`,
      `${proj.dev}/*.php`,
      `!${proj.dev}/css/**`,
      `!${proj.dev}/icomoon/**`,
    ],
  },
};

const bsConf = {
  base: `./`,
  start: `${proj.dev}/index.html`,
};

//----------------------------------------------------------------------
//  task
//----------------------------------------------------------------------
const clean = (done) => {
  del(paths.clean.src);

  done();
};

const wpClean = (done) => {
  del(paths.clean.wpSrc);

  done();
};

// sassコンパイル用
const sass = (done) => {
  const postcssPlugins = [cssdeclsort({ order: "smacss" })];
  src(paths.scss.src, { sourcemaps: true }) // コンパイル
    .pipe($.plumber())
    .pipe($.sassGlobUseForward())
    .pipe(dartSass())
    .pipe($.postcss(postcssPlugins))
    .pipe($.autoprefixer())
    .pipe(dest(paths.scss.dest))
    .pipe(dest(paths.scss.wpDest, { sourcemaps: "./sourcemaps" }));

  done();
};

/* -------------------------------- */
/* 開発                             */
/* -------------------------------- */
const development = (done) => {
  // css
  src([paths.cssOthers.src, "!src/css/sourcemaps/**"]) // cssファイル内のfontsフォルダはこれでコピーされる。sourcemapsはコピーしない！
    .pipe($.plumber())
    .pipe(dest(paths.cssOthers.wpDest));

  // html
  // 処理なし

  // php
  src(paths.php.src) // コピー
    .pipe($.plumber())
    .pipe(dest(paths.php.wpDest));

  // images
  src(paths.images.src).pipe($.plumber()).pipe(dest(paths.images.wpDest)); // 画像をコピー

  // js
  src(paths.js.src) // 圧縮、コピー
    .pipe($.plumber())
    .pipe(dest(paths.js.wpDest));

  // sass
  const postcssPlugins = [cssdeclsort({ order: "smacss" })];
  src(paths.scss.src, { sourcemaps: true }) // コンパイル
    .pipe($.plumber())
    .pipe($.sassGlobUseForward())
    .pipe(dartSass())
    .pipe($.postcss(postcssPlugins))
    .pipe($.autoprefixer())
    .pipe(dest(paths.scss.dest))
    .pipe(dest(paths.scss.wpDest, { sourcemaps: "./sourcemaps" })); // ./cssに出力

  done();
};

/* -------------------------------- */
/* 製品                             */
/* -------------------------------- */
const production = (done) => {
  // css
  src(paths.css.src) // パージ、圧縮、コピー
    .pipe($.plumber())
    .pipe(
      $.purgecss({
        content: [paths.html.src, paths.php.src, paths.js.src], // htmlやJavaScriptで使用されているクラスを見て、cssファイルの未使用スタイルを削除。jsで動的生成されるクラスはパージされるので、パージ対象外とする場合は　/* purgecss start ignore */　と　/* purgecss end ignore */　で囲うこと！（libファイルは囲っておこう）
      })
    )
    .pipe($.groupCssMediaQueries()) // メディアクエリをまとめる
    .pipe($.cleanCss()) // ファイル内の不要な空白や改行、コメントなどを削除
    .pipe(dest(paths.css.wpDest)); //

  // cssOthers(ソースマップを除く全て)
  src([paths.cssOthers.src, "!src/css/sourcemaps/**"]) // cssファイル内のfontsフォルダはこれでコピーされる。sourcemapsはコピーしない！
    .pipe($.plumber())
    .pipe(dest(paths.cssOthers.wpDest));

  // html
  src(paths.html.src) // コピー
    .pipe($.plumber())
    // .pipe($.replace('/\.rev.(js|css)/g', '.rev=' + hash + '.$1'))
    .pipe(dest(paths.html.wpDest));

  // php
  src(paths.php.src) // コピー
    .pipe($.plumber())
    .pipe(dest(paths.php.wpDest));

  // images
  src(paths.images.src)
    .pipe($.plumber())
    // .pipe($.changed(paths.images.dest))
    // .pipe(
    // 	$.imagemin([ // 圧縮はしないように設定中。。。
    // 		pngquant({
    // 			quality: [0.7, 0.8],
    // 			speed: 1,
    // 		}),
    // 		mozjpeg({ quality: 80 }),
    // 		// $.imagemin.svgo(), // svg
    // 		$.imagemin.optipng(),
    // 		$.imagemin.gifsicle({
    // 			optimizationLevel: 3,
    // 		}),
    // 	])
    // )
    .pipe(dest(paths.images.wpDest)); // 画像をコピー

  // js
  src(paths.js.src) // 圧縮、コピー
    .pipe($.plumber())
    .pipe($.uglify())
    .pipe(dest(paths.js.wpDest));

  // sass
  // 処理なし

  done();
};

const bsInit = (done) => {
  bs.init({
    // ----------------------------------------- HTML↓

    // server: {
    // 	baseDir: bsConf.base,
    // },
    // startPath: bsConf.start,
    // notify: false,
    // open: 'external',

    // ----------------------------------------- HTML↑

    // ========================================= PHP↓

    // // MAMPの設定で、Document Rootをindex.phpファイルが置いてあるディレクトリ（srcフォルダ内）に設定する
    // proxy: "localhost:8888/", // localhost:8888の「8888」を、MAMPの設定のApache Portを合わせる
    // notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    // index: "index.php" ,// インデックスファイル名。index.phpでよい
    // open: 'external',

    // ========================================= PHP↑
    // ========================================= Local↓

    proxy: "isewptemplate.local", // ローカルにある「Site Domain」に合わせる 例1 "localhost:10006", 例2 "gito.local"
    notify: false, // ブラウザ更新時に出てくる通知を非表示にする
    open: "external", // ローカルIPアドレスでサーバを立ち上げる
    // ========================================= Local↑
  });

  done();
};

const bsReload = (done) => {
  bs.reload();

  done();
};

//----------------------------------------------------------------------
//  watchTask
//----------------------------------------------------------------------
const watchTask = (done) => {
  watch(paths.watch.wpSrc, series(development, bsReload));

  done();
};

// sass用watch
const watchSass = (done) => {
  watch(paths.watch.src, series(sass));

  done();
};

//----------------------------------------------------------------------
//  export
//----------------------------------------------------------------------
exports.clean = clean;
exports.wpClean = wpClean;
exports.development = series(development, bsInit, bsReload, watchTask);
exports.production = series(production);
exports.sass = series(sass, watchSass); // sassのコンパイルのみ
exports.bs = series(bsInit, bsReload, watchTask); // sassのコンパイルのみ

/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/
