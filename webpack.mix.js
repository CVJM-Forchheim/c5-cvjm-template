let mix = require("laravel-mix");

const buildFolder = "packages/cvjmTemplate";
const themeBuildFolder = buildFolder + "/themes/cvjm";

mix.webpackConfig({
  externals: {
    jquery: "jQuery",
    bootstrap: true,
    vue: "Vue",
    moment: "moment",
  },
});

mix.setPublicPath(themeBuildFolder);

mix
  .sass("assets/scss/main.scss", themeBuildFolder + "/css/main.css")
  .js("assets/js/main.js", themeBuildFolder + "/js/main.js");

mix.copy(
  ["src/blocks/autonav/templates/*.php"],
  buildFolder + "/blocks/autonav/templates"
);

mix.copy(
  [
    "src/themes/cvjm/elements",
    "src/themes/cvjm/*.php",
    "src/themes/cvjm/*.txt",
    "src/themes/cvjm/thumbnail.png",
  ],
  themeBuildFolder
);

mix.copy(["src/*.php", "src/icon.png"], buildFolder);
