// !! let seatsData from seatsHandler.js

function isEmpty(string)
{
    return string == "" || string == null
}

function onSubmit()
{
    const formContainer = $("form")
    const POST = formContainer.serializeArray()
    const seatsEntries = Object.entries(seatsData)

    const json = {}
    for (let num = 0; num < POST.length; num++) {
        const tbl = POST[num]
        json[tbl.name] = tbl.value
    }

    let hasNotSelectedSeats = true
    for (let [_, tbl] of seatsEntries) {
        // img: element.firstElementChild,
        // toggle: false,
        // seat: element.id,

        let hasSelectedSeat = tbl.toggle
        if (!hasSelectedSeat) continue

        hasNotSelectedSeats = false 
        break
    }

    if (hasNotSelectedSeats) {
        alert("AUB selecteer een stoel voor de film")

        return false
    }

    if (isEmpty(json.date)) {
        alert("AUB selecteer een datum voor de film")

        return false
    }

    if (isEmpty(json.timeStamp)) {
        alert("AUB selecteer een tijdstip voor de film")

        return false
    }
    
    return true
}