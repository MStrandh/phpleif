module.exports = function(grunt) {
	var minimizedJsFileName = 'main_minimized.js';

	var vendorJS = [
		'dev/js_vendor/jquery-2.1.0.js'
	];

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		'ftp-deploy': {
			build: {
				auth: {
					host: 'ftp.pixelmath.se',
					port: 21,
					authKey: 'pixelmath'
				},
				src: './dev/',
				dest: '/leif/',
				exclusions: ['']
			}
		}
	});

	// -- LOAD ALL NPM TASKS

	grunt.loadNpmTasks('grunt-ftp-deploy');

	// -- DEFAULT IS TO DO A FULL RELEASE BUILD
	grunt.registerTask('default', [
		'ftp-deploy'
	]);
};
