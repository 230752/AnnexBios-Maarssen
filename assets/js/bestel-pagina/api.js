const URL = "https://annexbios-server.onrender.com/api/"

async function getAPI(path) {
    await fetch(URL + path)
    .then(res => res.json())
    .then(res => {
        console.log(res)
    })
}

getAPI("movies")