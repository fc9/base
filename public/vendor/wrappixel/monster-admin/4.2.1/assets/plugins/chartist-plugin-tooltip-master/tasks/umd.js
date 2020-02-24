/**
 * umd
 * ===
 *
 * Wraps the library into an universal module definition (AMD + CommonJS + Global).
 *
 * Link: https://github.com/bebraw/grunt-umd
 */

'use strict';

module.exports = function (grunt) {
  return {
    dist: {
      src: '<%= pkg.Config.src %>/scripts/<%= pkg.Config.src_name %>.js',
      dest: '<%= pkg.Config.dist %>/<%= pkg.Config.src_name %>.js',
      objectToExport: 'Chartist.plugins.tooltips',
      deps: {
        default: ['Chartist'],
        amd: ['chartist'],
        cjs: ['chartist'],
        global: ['Chartist']
      },
      indent: '  '
    }
  };
};
