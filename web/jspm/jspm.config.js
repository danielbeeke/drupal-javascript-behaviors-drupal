SystemJS.config({
  paths: {
    "npm:": "jspm/packages/npm/",
    "dj/": ""
  },
  browserConfig: {
    "baseURL": "/",
    "paths": {
      "drupal-javascript/": "./"
    }
  },
  nodeConfig: {
    "paths": {
      "drupal-javascript/": ""
    }
  },
  devConfig: {
    "map": {
      "plugin-babel": "npm:systemjs-plugin-babel@0.0.21"
    }
  },
  transpiler: "plugin-babel",
  packages: {
    "drupal-javascript": {
      "main": "drupal-javascript.js",
      "format": "esm",
      "meta": {
        "*.js": {
          "loader": "plugin-babel"
        }
      }
    }
  }
});

SystemJS.config({
  packageConfigPaths: [
    "npm:@*/*.json",
    "npm:*.json"
  ],
  map: {
    "jquery": "npm:jquery@3.1.1",
    "underscore": "npm:underscore@1.8.3"
  },
  packages: {}
});
