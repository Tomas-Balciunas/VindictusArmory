var ats = document.querySelector('#ats');
var bal = document.querySelector('#bal');
var crit = document.querySelector('#crit');
var att = document.querySelector('#att');
var matt = document.querySelector('#matt');
var def = document.querySelector('#def');
var cres = document.querySelector('#cres');
var str = document.querySelector('#str');
var agi = document.querySelector('#agi');
var int = document.querySelector('#int');
var wil = document.querySelector('#wil');
let selects = document.querySelectorAll('select');

let atsarr = {};
let balarr = {};
let critarr = {};
let attarr = {};
let mattarr = {};
let defarr = {};
let cresarr = {};
let strarr = {};
let agiarr = {};
let intarr = {};
let wilarr = {};


let none = { "ats": 0, "bal": 0, "crit": 0, "att": 0, "matt": 0, "def": 0, "cres": 0, "str": 0, "agi": 0, "int": 0, "wil": 0 };

selects.forEach((e, i) => {
    e.addEventListener('change', function () {
        if (e.classList.contains('quality')) { i = indexCheck(e) }
        let w;
        let set = 0;
        if (e.value == 0) {
            w = none;
            statPush(w, i);
            total(set);
        } else {
            w = JSON.parse(e.value);
            if (w.type == "ring") { set = ringSet() };
            if (w.quality == true || e.className == 'quality') { w = qualityCheck(w, e) };
            statPush(w, i);
            total(set);
        }
    });
});

function indexCheck(e) {
    let parent = e.parentNode.parentNode;
    let sibling = parent.querySelector('.type');
    for (k = 0; k <= selects.length; k++) {
        if (selects[k] === sibling) {
            return k;
        }
    }
}

function ringSet() {
    var ring1 = JSON.parse(document.querySelector('#ring1').value);
    var ring2 = JSON.parse(document.querySelector('#ring2').value);

    if (ring1.name != ring2.name && ring1.set == ring2.set) {
        return 1;
    } else {
        return 0;
    }
}

function qualityCheck(w, e) {
    if (Object.keys(w).length == 0) {
        let parent = e.parentNode.parentNode;
        let w = JSON.parse(parent.querySelector('.type').value);
        let q = e.value;
        if (w != 0) {
            w = qualityCalc(w, q);
            return w;
        } else {
            w = 0;
            return w;
        }
    } else {
        let parent = e.parentNode.parentNode;
        let q = parent.querySelector('.quality').value;
        w = qualityCalc(w, q);
        return w;
    }
}

function qualityCalc(w, q) {
    let base = w;

    switch (q) {
        case '2':
            w = base;
            return w;
        case '3':
            w.att != null ? w.att = Math.round(w.att * 1.02) : w.att = 0
            w.matt != null ? w.matt = Math.round(w.matt * 1.02) : w.matt = 0
            w.def != null ? w.def = Math.round(w.def * 1.02) : w.def = 0
            w.str != null ? w.str = Math.round(w.str * 1.15) : w.str = 0
            w.agi != null ? w.agi = Math.round(w.agi * 1.15) : w.agi = 0
            w.int != null ? w.int = Math.round(w.int * 1.15) : w.int = 0
            w.wil != null ? w.wil = Math.round(w.wil * 1.15) : w.wil = 0
            return w;
        case '4':
            w.att != null ? w.att = Math.round(w.att * 1.04) : w.att = 0
            w.matt != null ? w.matt = Math.round(w.matt * 1.04) : w.matt = 0
            w.def != null ? w.def = Math.round(w.def * 1.04) : w.def = 0
            w.str != null ? w.str = Math.round(w.str * 1.20) : w.str = 0
            w.agi != null ? w.agi = Math.round(w.agi * 1.20) : w.agi = 0
            w.int != null ? w.int = Math.round(w.int * 1.20) : w.int = 0
            w.wil != null ? w.wil = Math.round(w.wil * 1.20) : w.wil = 0
            return w;
        case '5':
            w.att != null ? w.att = Math.round(w.att * 1.06) : w.att = 0
            w.matt != null ? w.matt = Math.round(w.matt * 1.06) : w.matt = 0
            w.def != null ? w.def = Math.round(w.def * 1.06) : w.def = 0
            w.str != null ? w.str = Math.round(w.str * 1.25) : w.str = 0
            w.agi != null ? w.agi = Math.round(w.agi * 1.25) : w.agi = 0
            w.int != null ? w.int = Math.round(w.int * 1.25) : w.int = 0
            w.wil != null ? w.wil = Math.round(w.wil * 1.25) : w.wil = 0
            return w;
    }
}

function statPush(w, i) {
    w.ats != null ? atsarr[i] = w.ats : atsarr[i] = 0;
    w.bal != null ? balarr[i] = w.bal : balarr[i] = 0;
    w.crit != null ? critarr[i] = w.crit : critarr[i] = 0;
    w.att != null ? attarr[i] = w.att : attarr[i] = 0;
    w.matt != null ? mattarr[i] = w.matt : mattarr[i] = 0;
    w.def != null ? defarr[i] = w.def : defarr[i] = 0;
    w.cres != null ? cresarr[i] = w.cres : cresarr[i] = 0;
    w.str != null ? strarr[i] = w.str : strarr[i] = 0;
    w.agi != null ? agiarr[i] = w.agi : agiarr[i] = 0;
    w.int != null ? intarr[i] = w.int : intarr[i] = 0;
    w.wil != null ? wilarr[i] = w.wil : wilarr[i] = 0;
}

function total(set) {
    ats.innerHTML = sum(atsarr);
    bal.innerHTML = sum(balarr);
    crit.innerHTML = 31 + sum(critarr) + set;
    att.innerHTML = sum(attarr);
    matt.innerHTML = sum(mattarr);
    def.innerHTML = sum(defarr);
    cres.innerHTML = sum(cresarr);
    str.innerHTML = sum(strarr);
    agi.innerHTML = sum(agiarr);
    int.innerHTML = sum(intarr);
    wil.innerHTML = sum(wilarr);
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