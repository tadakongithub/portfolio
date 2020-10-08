let counterForHello = 0;
let counterForName = 0;
let counterForSelfDesc = 0;
const helloToInsert = 'Hello!';
const nameToInsert = `I'm Tadashi Konno,`;
const selfDescToInsert = 'a full-stack developer.';
const whereHelloGoes = document.getElementById('hello');
const whereNameGoes = document.getElementById('name-at-the-top');
const whereSelfDescGoes = document.getElementById('self-desc');
const timeout = 100;

const typeWriter = () => {
    if(counterForHello < helloToInsert.length){
        whereHelloGoes.innerHTML += helloToInsert.charAt(counterForHello);
        counterForHello++;
        setTimeout(typeWriter, timeout);
    } else if(counterForName < nameToInsert.length) {
        whereNameGoes.innerHTML += nameToInsert.charAt(counterForName);
        counterForName++;
        setTimeout(typeWriter, timeout);
    } else if(counterForSelfDesc < selfDescToInsert.length) {
        whereSelfDescGoes.innerHTML += selfDescToInsert.charAt(counterForSelfDesc);
        counterForSelfDesc++;
        setTimeout(typeWriter, timeout);
    } else {
        return;
    }
}

typeWriter();