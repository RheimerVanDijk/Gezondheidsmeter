function scriptLoader(path, callback) {
  let script = document.createElement("script");
  script.type = "text/javascript";
  script.async = true;
  script.src = path;
  script.onload = function () {
    if (typeof callback == "function") {
      callback();
    }
  };
  try {
    let scriptOne = document.getElementsByTagName("script")[0];
    scriptOne.parentNode.insertBefore(script, scriptOne);
  } catch (e) {
    document.getElementsByTagName("head")[0].appendChild(script);
  }
}

scriptLoader("src/api/getAwnsersAPI.js");

// js files
scriptLoader("src/js/globalFunctions.js");
scriptLoader("src/js/charts/averageChart.js");
scriptLoader("src/js/charts/drugsChart.js");
scriptLoader("src/js/charts/foodChart.js");
scriptLoader("src/js/charts/alcoholChart.js");
scriptLoader("src/js/charts/sleepChart.js");
scriptLoader("src/js/charts/sportChart.js");
scriptLoader("src/js/charts/workChart.js");
scriptLoader("src/js/charts/homeChart.js");
scriptLoader("src/js/question.js");
scriptLoader("src/js/questionSections/sport.js");
scriptLoader("src/js/questionSections/eten.js");
scriptLoader("src/js/questionSections/drugs.js");
scriptLoader("src/js/questionSections/sleep.js");

// api files
scriptLoader("src/api/registerAPI.js");
scriptLoader("src/api/loginAPI.js");
scriptLoader("src/api/questionsAPI.js");
scriptLoader("src/api/reomveAccountAPI.js");
