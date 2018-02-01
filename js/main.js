let idArr = document.querySelectorAll('*[id]');
let htmlID = {};

for(i=0; i!=idArr.length; i++) {
    htmlID[idArr[i].id] = idArr[i];
}

