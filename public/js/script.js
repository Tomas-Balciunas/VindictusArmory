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
        let set = ringSet();
        statPush(w, i);
        total(set);
    });
});

function ringSet() {
    var ring1 = JSON.parse(document.querySelector('#ring1').value);
    var ring2 = JSON.parse(document.querySelector('#ring2').value);

    if (ring1.name != ring2.name && ring1.set == ring2.set) {
        return 1;
    } else {
        return 0;
    }
}

function statPush(w, i) {
    w.ats != null ? atsarr[i] = w.ats : atsarr[i] = 0;
    w.bal != null ? balarr[i] = w.bal : balarr[i] = 0;
    w.crit != null ? critarr[i] = w.crit : critarr[i] = 0;
    w.def != null ? defarr[i] = w.def : defarr[i] = 0;
    w.cres != null ? cresarr[i] = w.cres : cresarr[i] = 0;
}

function total(set) {
    ats.innerHTML = sum(atsarr);
    bal.innerHTML = sum(balarr);
    crit.innerHTML = 31 + sum(critarr) + set;
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