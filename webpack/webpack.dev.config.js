const webpack = require("webpack");
const merge = require('webpack-merge');
const baseConfig = require('./webpack.base.config.js');

module.exports = merge(baseConfig, {
  devtool: "source-map",
  output: {
    filename: 'www/theme/js/boilerplate.dev.js'
  },
  watch: true
});
