// get current year
const currentYear = new Date().getFullYear()

document.getElementById('currentYear').innerHTML = currentYear

// assing color state to lots in svg
const lots = document.querySelectorAll('.cls-1')

for (var i = 0; i < lots.length; i++) {
    const available = parseInt(lots[i].getAttribute('data-available'))

    const color = selectColor(available)

    lots[i].style.fill = color

}

function selectColor(available) {
    switch (available) {
        case 1:
            return '#008000';
            break;

        case 2:
            return '#f5b225';
            break;

        case 3:
            return '#ff0000';
            break;
    
        default:
            return '#6c757d';
            break;
    }
}

// show popover by lot
 $(".cls-1").mouseover(function() {
      const lotId = $(this).attr('id')
     const lotNum = $(this).attr('data-number')
     const lotArea = $(this).attr('data-area')
    
     tippy(`#${lotId}`, {
         allowHTML: true,
          content: `<p>No. Lote: ${lotNum} <br> Área: ${lotArea}m<sup>2</sup></p>`,
          theme: 'light'
      })
  })