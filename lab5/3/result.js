// document.open();
// document.createElement("HEAD");
let requestURL = 'countries.json'; //เรียกตัวแปรfile json ที่จะเรียก 
let request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        ExtractData(JSON.parse(request.responseText));
    }
};
request.open("GET", requestURL, true);
request.send();


let a = "";
function ExtractData(data) {
    for (let ct of data) {
        // document.write(ct.name);
        let con = document.getElementById("main");
        con.innerHTML += '<div class="row justify-content-center mt-5">\
            <div class="col-sm-6">\
            <p class="font-weight-bold">Name : '+ ct.name + '</p>\
            <p>Capital : '+ ct.capital + '</p>\
            <p>Population : '+ ct.population + '</p>\
            <p>Region : '+ ct.region + '</p>\
            <p>Location : '+ ct.latlng[0] + ' ' + ct.latlng[1] + '</p>\
            <p>Borders : '+ loopborder(ct.borders) + '</p></div>\
            <div class="col-sm-5">\
            <img src="'+ ct.flag +'" width="100%">\
            </div></div>';

        // document.write('<div class="row justify-content-center">\
        // <div class="col-sm-3">'); //div row and data col
        // document.write('<p>Name : '+ ct.name +'</p>');
        // document.write('<p>Capital : '+ ct.capital +'</p>');
        // document.write('<p>Population : '+ ct.population +'</p>');
        // document.write('<p>Region : '+ ct.region +'</p>');
        // document.write('<p>Location : '+ ct.latlng[0] +' '+ ct.latlng[1] +'</p>');
        // document.write('<p>Borders : ');
        // for (let rn of ct.borders){
        //      a += rn;
        //     return a;
        // }
        // document.write('</p></div>');//close data col
        // document.write('<div class="col-sm-3">\
        //     <img src="'+ ct.flag +'" width="10%">\
        // </div></div>')

    }

    // document.write('</div>');//close container
}
document.close();
function loopborder(border) {
    for (bd of border) {
        a += (bd + ' ');
        return a;
    }
}