const webpack = require("webpack");
const merge = require('webpack-merge');
// const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const CompressionPlugin = require("compression-webpack-plugin");
const baseConfig = require('./webpack.base.config.js');

module.exports = merge(baseConfig, {
  output: {
    filename: 'www/theme/js/boilerplate.min.js'
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({
      include: /\.min\.js$/,
      sourceMap: true,
      compress: {
        warnings: false,
        comparisons: false, // don't optimize comparisons
      },
    }),
    new CompressionPlugin({
      asset: "[path].gz[query]",
      algorithm: "gzip",
      test: /\.js$|\.css$|\.html$/,
      threshold: 10240,
      minRatio: 0.8
    })
  ]
});
