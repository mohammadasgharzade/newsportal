    $(document).ready(function () {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          if (this.responseText !== null && this.responseText !== undefined && this.responseText !== '' && localStorage.getItem("code") == null && localStorage.getItem("code") !== undefined) {
            localStorage.setItem("code", this.responseText);
          }
        }
      };

      var Code = null;

      if (localStorage.getItem("code") !== null && localStorage.getItem("code") !== undefined) {
        Code = localStorage.getItem("code").substring(1, 37);
      }

      var analiseData = JSON.stringify({
        code: Code,
        ratio: `${window.innerWidth} * ${window.innerHeight}`,
        BrowserCodeName: navigator.appCodeName,
        browserName: navigator.appName,
        browserVersion: navigator.appVersion,
        backLink: document.referrer,
        url: window.location.href,
        platform: navigator.platform,
        userAgent: navigator.userAgent,
      })
      xhttp.open("POST", "https://stat.farsnews.ir/api/apilog", true);
      xhttp.setRequestHeader("Content-Type", "application/json");
      xhttp.send(analiseData);
    });