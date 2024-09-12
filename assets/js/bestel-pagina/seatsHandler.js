let seatsData = {

}

function onSeatClick(element) {
    const elementId = element.id

    seatsData[elementId] = seatsData[elementId] ? seatsData[elementId] : {
        img: element.firstElementChild,
        toggle: false,
    }
    
    seatsData[elementId].toggle = !seatsData[elementId].toggle
    seatsData[elementId].img.style.filter = seatsData[elementId].toggle ? "brightness(50%)" : "brightness(100%)"
}