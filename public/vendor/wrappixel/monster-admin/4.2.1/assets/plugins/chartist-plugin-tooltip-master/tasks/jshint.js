/**
 * jshint
 * ======
 *
 * Make sure code styles are up to par and there are no obvious mistakes.
 *
 * Link: https://github.com/gruntjs/grunt-contrib-jshint
 */

'use strict';

module.exports = function (grunt) {
  return {
    options: {
      jshintrc: '.jshintrc',
      reporter: require('jshint-stylish')
    },
    all: [
      'Gruntfile.js',
      '<%= pkg.Config.src %>/{,*/}*.js',
      '<%= pkg.Config.site %>/scripts/{,*/}*.js'
    ],
    test: {
      options: {
        jshintrc: '<%= pkg.Config.test %>/.jshintrc'
      },
      src: ['<%= pkg.Config.test %>/spec/{,*/}*.js']
    }
  };
};
