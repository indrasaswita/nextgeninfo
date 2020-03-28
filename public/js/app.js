window.jQuery = window.$ = require('jquery');
require("bootstrap");
require("@fortawesome/fontawesome-pro/js/all.min.js");


require("angular");
require("angular-route");
require("angular-resource");

var app = require("./custom/init");

require('./custom/variable')(app);
require('./custom/godhands')(app);

