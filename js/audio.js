//gestion des sons
let audioG = new Audio('./audio/wario.mp3');
let audioO = new Audio('./audio/wariomath.mp3');
function pseudoWario(){
    audioG.volume = 0.2;
    audioG.play();
}
function logoWario(){
    audioO.volume = 0.2;
    audioO.play();
}