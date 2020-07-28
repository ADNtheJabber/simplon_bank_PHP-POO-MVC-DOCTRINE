/* -------COMPTES------- */

var enregistrerCompte = document.getElementById('submitCompte');
enregistrerCompte.addEventListener('click', check_entrees_compte);

var annuler = document.getElementById('reset');
annuler.addEventListener('click', refresh);

var choixCourant = document.getElementById('courant');
choixCourant.addEventListener(click, afficherInfoCourant);

var choixBloque = document.getElementById('bloque');
choixBloque.addEventListener(click, afficherInfoBloque);

var choixEpargne = document.getElementById('epargne');
choixEpargne.addEventListener(click, afficherInfoEpargne);

var numCompte = document.getElementById('noCompte');
var numCompte_m = document.getElementById('numCompte_error');

var fraisOuv = document.getElementById('fraisOuv');
var fraisOuv_m = document.getElementById('fraisOuv_error');

var remunAnnuelle = document.getElementById('remunAnnuelle');
var remun_m = document.getElementById('remun_error');

var agiosCC = document.getElementById('agiosCC');
var agios_m = document.getElementById('agios_error');

var depotInitCC = document.getElementById('depotInitialCC');
var depotInit_m = document.getElementById('depotInit_error');

var date = document.getElementById('dateDeblocage');
var date_m = document.getElementById('date_error');

/* -------COMPTES------- */
var compte = document.getElementById('formCompte');
var type = document.getElementById('typeCompte');
type.addEventListener(click, afficherChamps);

function afficherInfoCourant(e){
    e.preventDefault();
    agiosCC.style.display = 'block';
    depotInitCC.style.display = 'block'
    fraisOuv.style.display = 'none';
    remunAnnuelle.style.display = 'none';
    date.style.display = 'none';
}

function afficherInfoBloque(){
    e.preventDefault();
    fraisOuv.style.display = 'block';
    remunAnnuelle.style.display = 'block';
    date.style.display = 'block';
    agiosCC.style.display = 'none';
    depotInitCC.style.display = 'none'
}

function afficherInfoEpargne(){
    e.preventDefault();
    fraisOuv.style.display = 'block';
    remunAnnuelle.style.display = 'block';
    date.style.display = 'none';
    agiosCC.style.display = 'none';
    depotInitCC.style.display = 'none'
}


function check_entrees_compte(e){

    if(!fraisOuv.value || fraisOuv.value > 10000){
        e.preventDefault();
        fraisOuv_m.textContent = 'les frais ne depassent pas 10 000f';
        fraisOuv_m.style.color = 'red'; 
    }

    else if(!remunAnnuelle.value || remunAnnuelle.value < 5000){
        e.preventDefault();
        remun_m.textContent = 'minimum 5000f';
        remun_m.style.color = 'red'; 
    }

    else if (!agiosCC.value){
        e.preventDefault();
        agios_m.textContent = 'renseignez le champs';
        agios_m.style.color = 'red';
    }

    else if (!depotInitCC.value || depotInitCC < 15000){
        e.preventDefault();
        depotInit_m.textContent = 'minimum 15000f en depot initial';
        depotInit_m.style.color = 'red';
    }
}

    function refresh(e) {
        e.preventDefault();
        location.reload();
    }
    