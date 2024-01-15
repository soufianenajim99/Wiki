var myrequest = new XMLHttpRequest();

myrequest.onreadystatechange = function () {
  if (this.readyState === 4 && this.status === 200) {
    console.log(this.responseText);
    var myjsobject = JSON.parse(this.responseText),
      mytext = "";
    for (var i = 0; myjsobject.length; i++) {
      console.log(myjsobject[i]);
    }
  }
};

myrequest.open("GET", "http://localhost/Wiki/home/explore", true);
myrequest.send();
