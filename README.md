<<<<<<< HEAD
gruntjs-default-jsbuild
=======================

Running 'grunt' builds the 'project' and deploys it to the build folder.

### grunt (default)
It adds script tags for all the JavaScript files found in 'dev/js' and 'dev/js_vendor'. Then it copies the 'dev/index.html' and all files found in 'dev/assets' to the 'build' folder. The last step is to uglify all of the JavaScript files and replace the script tags in 'build/index.html' with a single tag referencing the minimized version.

### grunt debug
Runs JSHint on all the JavaScript files followed by re-adding all the script tags for each JavaScript file.

### grunt watch
This is the (most) useful task for rapid testing/prototyping. Basically it monitors changes to the JavaScript files, once a change is detected it JSHints everything, adds all script tags and reloads the browser(if the LiveReload plug-in is installed).
=======
# phpleif
>>>>>>> 57820c63436b52948fe72a8c7635b7bb08463e4f
