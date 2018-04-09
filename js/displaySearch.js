var alkDiv = document.getElementById("alk");
var mixDiv = document.getElementById("mix");
var extraDiv = document.getElementById("extra");

var alkBtn = document.getElementById("alkBtn");
var mixBtn = document.getElementById("mixBtn");
var extraBtn = document.getElementById("extraBtn");

document.onload = alk();

function alk(alk) {
    alkDiv.style.display="block";
    mixDiv.style.display="none";
    extraDiv.style.display="none";
    alkBtn.style.backgroundColor="#56ADAF";
    mixBtn.style.backgroundColor="#AEAEAE";
    extraBtn.style.backgroundColor="#AEAEAE";
}

function mix(mix) {
    alkDiv.style.display="none";
    mixDiv.style.display="block";
    extraDiv.style.display="none";
    alkBtn.style.backgroundColor="#AEAEAE";
    mixBtn.style.backgroundColor="#56ADAF";
    extraBtn.style.backgroundColor="#AEAEAE";
}

function extra(extra) {
    alkDiv.style.display="none";
    mixDiv.style.display="none";
    extraDiv.style.display="block";
    alkBtn.style.backgroundColor="#AEAEAE";
    mixBtn.style.backgroundColor="#AEAEAE";
    extraBtn.style.backgroundColor="#56ADAF";

}

