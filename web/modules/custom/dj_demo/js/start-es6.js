var realDomready = window.domready;

window.domready = function (callback) {
    SystemJS.import('dj/modules/custom/dj_demo/js/es6.js').then(function () {
        realDomready(callback);
    });
};