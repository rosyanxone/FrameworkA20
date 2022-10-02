const chk = document.getElementById('chk');
chk.addEventListener('change', result);

function result() {
    let darkDiv = document.querySelectorAll('.mode');
    let lightImg = document.querySelectorAll('.mode-img');
    let lightBor = document.querySelectorAll('.mode-bor');
    
    for(let x of darkDiv) {
        x.classList.toggle('dark')
    }
    for(let y of lightImg) {
        y.classList.toggle('light-img');
    }
    for(let z of lightBor) {
        z.classList.toggle('light-border');
    }
}