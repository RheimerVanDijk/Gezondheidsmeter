function scriptLoader(path, callback) {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.async = true;
  script.src = path;
  script.onload = function () {
    if (typeof callback == "function") {
      callback();
    }
  };
  try {
    var scriptOne = document.getElementsByTagName("script")[0];
    scriptOne.parentNode.insertBefore(script, scriptOne);
  } catch (e) {
    document.getElementsByTagName("head")[0].appendChild(script);
  }
}

// js files
scriptLoader("src/js/globalFunctions.js");
scriptLoader("src/js/charts/averageChart.js");
scriptLoader("src/js/charts/drugsChart.js");
scriptLoader("src/js/charts/foodChart.js");
scriptLoader("src/js/charts/sleepChart.js");
scriptLoader("src/js/charts/sportChart.js");
scriptLoader("src/js/charts/workChart.js");

// api files
scriptLoader("src/api/registerAPI.js");
scriptLoader("src/api/loginAPI.js");