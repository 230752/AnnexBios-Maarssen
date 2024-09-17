let ticketContainer = document.getElementById("tickets-container")

let seatsData = {}
let tickets;

async function checkCoupon(element) {
    const parent = element.parentElement
    const couponText = parent.children[1]

    const data = fetch("api/checkCoupon.php", {
        method: "POST",
        body: JSON.stringify({
            ["couponCode"]: couponText.value
        }),
    })

    const promise = (await data).json()

    promise.then((response) => {
        alert(`Coupon "${couponText.value}" is ${response.valid}`)
    })
}

function refreshTickets() {
    let html = ""
    
    for (let [_, tbl] of Object.entries(seatsData)) {
        if (!tbl.toggle) continue

        const seatDecode = JSON.parse(tbl.seat)

        html += 
        `<div class="form-tickets-content">
            <p id="type" class="form-tickets-p global-secondary">
                Rij ${seatDecode[0]}, Stoel ${seatDecode[1]}
            </p>

            <p id="price" class="form-tickets-p global-secondary">
                &euro;9,00
            </p>

            <select class="form-tickets-selection" onchange="updateTicket(this)">
                <option selected value="0">Normaal</option>
                <option value="1">Kind t/m 11 jaar</option>
                <option value="2">65 +</option>
            </select>

            <input type="hidden" id="value" name="tickets[]" value='{"seat": "${tbl.seat}", "ticketType": "0"}'>
        </div>`   
    }

    ticketContainer.innerHTML = html
}

function onSeatClick(element) {
    const elementId = element.id

    seatsData[elementId] = seatsData[elementId] ? seatsData[elementId] : {
        img: element.firstElementChild,
        toggle: false,
        seat: element.id,
    }

    const targetToggle = !seatsData[elementId].toggle
    
    seatsData[elementId].toggle = targetToggle
    seatsData[elementId].img.style.filter = targetToggle ? "brightness(50%)" : "brightness(100%)"
    
    refreshTickets()
}

function updateTicket(element) {
    const parentElement = element.parentElement
    const priceElement = parentElement.children[1]
    const dataElement = parentElement.children[3]
    
    const ticketIndex = element.value
    const ticketPrice = tickets[ticketIndex].price
    const dataDecode = JSON.parse(dataElement.value)

    dataDecode.ticketType = ticketIndex

    priceElement.innerHTML = `&euro;${ticketPrice}`
    dataElement.value = JSON.stringify(dataDecode)
}

async function init() {
    tickets = await fetch('assets/json/ticketsTypes.json')
        .then(response => response.json())
        .then(response => {
            return response
        })
}

init()