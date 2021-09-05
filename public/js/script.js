var ats = document.querySelector('#ats');
var bal = document.querySelector('#bal');
var crit = document.querySelector('#crit');
var def = document.querySelector('#def');
var cres = document.querySelector('#cres');
let selects = document.querySelectorAll('select');

let atsarr = {};
let balarr = {};
let critarr = {};
let defarr = {};
let cresarr = {};

selects.forEach((e, i) => {
    e.addEventListener('change', function () {
        var w = JSON.parse(e.value);
        w.ats != null ? atsarr[i] = w.ats : atsarr[i] = 0;
        w.bal != null ? balarr[i] = w.bal : balarr[i] = 0;
        w.crit != null ? critarr[i] = w.crit : critarr[i] = 0;
        w.def != null ? defarr[i] = w.def : defarr[i] = 0;
        w.cres != null ? cresarr[i] = w.cres : cresarr[i] = 0;
        total();
    });
});

function total() {
    ats.innerHTML = sum(atsarr);
    bal.innerHTML = sum(balarr);
    crit.innerHTML = sum(critarr);
    def.innerHTML = sum(defarr);
    cres.innerHTML = sum(cresarr);
}

function sum(obj) {
    var sum = 0;
    for (var el in obj) {
        if (obj.hasOwnProperty(el)) {
            sum += parseFloat(obj[el]);
        }
    }
    return sum;
}