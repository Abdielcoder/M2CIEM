async function getUsers() {
    let url = 'https://us-central1-ciem-58bd7.cloudfunctions.net/tadi/api/messages';
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}

async function renderUsers() {
    let element = await getUsers();
    let html = '';
    element.forEach(item => document.body.insertAdjacentHTML('beforeend', `<div class="container"><div class="card"> 
    <div class="card-body"><h5>${item.asunto}</h5><p class="card-text">${item.mensaje}
    </p><a href="#" class="card-link">Card link</a> <a href="#" class="card-link">Another link</a></div>`))

}
renderUsers();