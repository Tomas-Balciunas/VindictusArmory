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
var baseStr = document.querySelector('#baseStr');
var baseAgi = document.querySelector('#baseAgi');
var baseInt = document.querySelector('#baseInt');
var baseWil = document.querySelector('#baseWil');
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

let bStr = 0;
let bAgi = 0;
let bInt = 0;
let bWil = 0;
let set = 0;

var accEnhancement = {
    85: {
        1: { "att": 5, "matt": 5 },
        2: { "att": 10, "matt": 10 },
        3: { "att": 15, "matt": 15 },
        4: { "att": 20, "matt": 20 },
        5: { "att": 25, "matt": 25 },
        6: { "att": 30, "matt": 30 },
        7: { "att": 35, "matt": 35 },
        8: { "att": 40, "matt": 40 },
        9: { "att": 45, "matt": 45 },
        10: { "att": 50, "matt": 50 },
        11: { "att": 56, "matt": 56 },
        12: { "att": 62, "matt": 62 },
        13: { "att": 68, "matt": 68 },
        14: { "att": 74, "matt": 74 },
        15: { "att": 80, "matt": 80 },
        16: { "att": 86, "matt": 86 },
        17: { "att": 92, "matt": 92 },
        18: { "att": 98, "matt": 98 },
        19: { "att": 104, "matt": 104 },
        20: { "att": 110, "matt": 110 }
    },
    90: {
        1: { "att": 7, "matt": 7 },
        2: { "att": 14, "matt": 14 },
        3: { "att": 21, "matt": 21 },
        4: { "att": 28, "matt": 28 },
        5: { "att": 35, "matt": 35 },
        6: { "att": 42, "matt": 42 },
        7: { "att": 49, "matt": 49 },
        8: { "att": 56, "matt": 56 },
        9: { "att": 63, "matt": 63 },
        10: { "att": 70, "matt": 70 },
        11: { "att": 78, "matt": 78 },
        12: { "att": 86, "matt": 86 },
        13: { "att": 94, "matt": 94 },
        14: { "att": 102, "matt": 102 },
        15: { "att": 110, "matt": 110 },
        16: { "att": 118, "matt": 118 },
        17: { "att": 126, "matt": 126 },
        18: { "att": 134, "matt": 134 },
        19: { "att": 142, "matt": 142 },
        20: { "att": 150, "matt": 150 }
    },
    100: {
        1: { "att": 9, "matt": 9 },
        2: { "att": 18, "matt": 18 },
        3: { "att": 27, "matt": 29 },
        4: { "att": 36, "matt": 36 },
        5: { "att": 45, "matt": 45 },
        6: { "att": 54, "matt": 54 },
        7: { "att": 63, "matt": 63 },
        8: { "att": 72, "matt": 72 },
        9: { "att": 81, "matt": 81 },
        10: { "att": 90, "matt": 90 },
        11: { "att": 101, "matt": 101 },
        12: { "att": 112, "matt": 112 },
        13: { "att": 123, "matt": 123 },
        14: { "att": 134, "matt": 134 },
        15: { "att": 145, "matt": 145 },
        16: { "att": 156, "matt": 156 },
        17: { "att": 167, "matt": 167 },
        18: { "att": 178, "matt": 178 },
        19: { "att": 189, "matt": 189 },
        20: { "att": 200, "matt": 200 }
    },
    105: {
        1: { "att": 11, "matt": 11 },
        2: { "att": 22, "matt": 22 },
        3: { "att": 33, "matt": 33 },
        4: { "att": 44, "matt": 44 },
        5: { "att": 55, "matt": 55 },
        6: { "att": 66, "matt": 66 },
        7: { "att": 77, "matt": 77 },
        8: { "att": 88, "matt": 88 },
        9: { "att": 99, "matt": 99 },
        10: { "att": 110, "matt": 110 },
        11: { "att": 121, "matt": 121 },
        12: { "att": 132, "matt": 132 },
        13: { "att": 143, "matt": 143 },
        14: { "att": 154, "matt": 154 },
        15: { "att": 165, "matt": 165 },
        16: { "att": 176, "matt": 176 },
        17: { "att": 187, "matt": 187 },
        18: { "att": 198, "matt": 198 },
        19: { "att": 209, "matt": 209 },
        20: { "att": 220, "matt": 220 }
    }
}

let none = { "ats": 0, "bal": 0, "crit": 0, "att": 0, "matt": 0, "def": 0, "cres": 0, "str": 0, "agi": 0, "int": 0, "wil": 0 };

selects.forEach((e, i) => {
    e.addEventListener('change', function () {
        if (e.classList.contains('quality')) { i = indexCheck(e) }
        let w;
        if (e.value == 0) {
            w = none;
            set = ringSet();
            statPush(w, i);
            total(set);
        } else {
            w = JSON.parse(e.value);
            set = ringSet();
            if (w.quality == true || e.className == 'quality') { w = qualityCheck(w, e) };
            if (e.className == 'accLvl') {
                accLvlCalc(e, w);
                total(set);
            } else if (e.classList.contains('accessory')) {
                accLvlCalc(e, w);
                statPush(w, i);
                total(set);
            } else {
                statPush(w, i);
                total(set);
            }
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

function indexLvl(e) {
    let parent = e.parentNode.parentNode;
    let sibling = parent.querySelector('.accLvl');
    for (k = 0; k <= selects.length; k++) {
        if (selects[k] === sibling) {
            return k;
        }
    }
}

function ringSet() {
    let ring1 = JSON.parse(document.querySelector('#ring1').value);
    let ring2 = JSON.parse(document.querySelector('#ring2').value);

    if (ring1.name != ring2.name && ring1.set === ring2.set) {
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

function accLvlCalc(e, w) {
    i = indexLvl(e);
    if (e.classList.contains('accLvl')) {
        let parent = e.parentNode.parentNode;
        let item = JSON.parse(parent.querySelector('.accessory').value);

        if (item == 0) {
            return;
        } else {
            e.value == 0 ? attarr[i] = 0 : attarr[i] = accEnhancement[item.level][e.value].att;
            e.value == 0 ? mattarr[i] = 0 : mattarr[i] = accEnhancement[item.level][e.value].matt;
        }
    } else if (e.classList.contains('accessory')) {
        let parent = e.parentNode.parentNode;
        let q = parent.querySelector('.accLvl').value;

        if (q == 0) {
            attarr[i] = 0
            mattarr[i] = 0
        } else {
            attarr[i] = accEnhancement[w.level][q].att;
            mattarr[i] = accEnhancement[w.level][q].matt;
        }
    }
}

baseStr.addEventListener('focusout', function () {
    isEmpty(baseStr.value) == false ? bStr = parseInt(baseStr.value) : bStr = 0;
    total();
});

baseAgi.addEventListener('focusout', function () {
    isEmpty(baseAgi.value) == false ? bAgi = parseInt(baseAgi.value) : bAgi = 0;
    total();
});

baseInt.addEventListener('focusout', function () {
    isEmpty(baseInt.value) == false ? bInt = parseInt(baseInt.value) : bInt = 0;
    total();
});

baseWil.addEventListener('focusout', function () {
    isEmpty(baseWil.value) == false ? bWil = parseInt(baseWil.value) : bWil = 0;
    total();
});

function isEmpty(k) {
    return !k.trim().length;
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

function total() {
    ats.innerHTML = sum(atsarr);
    bal.innerHTML = sum(balarr);
    crit.innerHTML = parseInt(31 + sum(critarr) + set + ((sum(wilarr) + bWil) > 2000 ? 2000 * 0.0075 : (sum(wilarr) + bWil) * 0.0075));
    att.innerHTML = parseInt(486 + sum(attarr) + (sum(strarr) + bStr) * 2.7);
    matt.innerHTML = parseInt(700 + sum(mattarr) + (sum(intarr) + bInt) * 2);
    def.innerHTML = parseInt(780 + sum(defarr) + ((sum(agiarr) + bAgi) > 2000 ? 2000 / 2 : (sum(agiarr) + bAgi) / 2));
    cres.innerHTML = sum(cresarr);
    str.innerHTML = sum(strarr) + bStr;
    agi.innerHTML = sum(agiarr) + bAgi;
    int.innerHTML = sum(intarr) + bInt;
    wil.innerHTML = sum(wilarr) + bWil;
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