// file: js/require-setup.js
//
// Declare this variable before loading RequireJS JavaScript library
// To config RequireJS after it’s loaded, pass the below object into require.config();

require.config({
    baseUrl: 'assets/js',
    paths: {
        jquery: "jquery-1.11.3.min",
        bootstrap: "bootstrap.min"
    },
    shim: {
        bootstrap:{
            deps: ["jquery"]
        }
    }
});

require(["jquery", "bootstrap"], function ($) {
    requirejs(componente);
});
