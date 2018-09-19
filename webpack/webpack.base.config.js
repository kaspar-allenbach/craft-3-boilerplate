const webpack = require('webpack');

module.exports = {
  entry: {
    entry: [
      'lazysizes',
      'lightgallery',
      'respimage',
      'jquery.mmenu',
      './theme_src/js/ieDetector.js',
      './theme_src/js/boilerplate.js'
    ]
  },
  resolve: {
    modules: [
      './node_modules/'
    ]
  },
  module: {
    loaders: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
        query: {
          presets: ['es2015']
        }
      }
    ]
  }
};
