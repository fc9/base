/**
 * jasmine
 * =======
 *
 * Test settings
 *
 * Link: https://github.com/gruntjs/grunt-contrib-jasmine
 */

'use strict';

module.exports = function (grunt) {
  return {
    dist: {
      src: [
        'bower_components/chartist/dist/chartist.js',
        '<%= pkg.Config.src %>/scripts/<%= pkg.Config.src_name %>.js'
      ],
      options: {
        specs: '<%= pkg.Config.test %>/spec/**/spec-*.js',
        helpers: '<%= pkg.Config.test %>/spec/**/helper-*.js',
        phantomjs: {
          'ignore-ssl-errors': true
        }
      }
    }
  };
};
