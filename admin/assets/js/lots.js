
var lot_id = null
const url = `${window.location.origin}/admin/backend`

const editLot = (id) => {

	document.getElementById("loading").classList.add('d-none')
	document.getElementById("btn-options").classList.remove('d-none')

	fetch(`${url}/lots/edit.php?id=${id}`)
	.then(res => res.json())
	.then(data => {

		const { 
			id, 
			number, 
			area, 
			price_18_15,
			price_18_25,
			price_18_30,
			price_24_15,
			price_24_25,
			price_24_30,
			available 
		} = data.lot

		lot_id = id

		$('#number').val(number)
		$('#area').val(area)
		$('#price_18_15').val(price_18_15)
		$('#price_18_25').val(price_18_25)
		$('#price_18_30').val(price_18_30)
		$('#price_24_15').val(price_24_15)
		$('#price_24_25').val(price_24_25)
		$('#price_24_30').val(price_24_30)

		$('#available').val(available)

		$('#modal-lots').modal('show')
	})
	.catch(err => {
		Swal.fire({
		  	position: 'center',
		  	type: 'error',
		  	title: 'Ups, algo salio mal, intentalo de nuevo',
		  	showConfirmButton: false,
		  	timer: 3000
		})
	})

}

const updateLot = (event) => {
	event.preventDefault()

	document.getElementById("btn-options").classList.add('d-none')
	document.getElementById("loading").classList.remove('d-none')

	const formLot = document.getElementById('form-lot')
	const dataLot = new FormData(formLot)
			
	fetch(`${url}/lots/update.php?id=${lot_id}`, {
		method: 'POST',
		body: dataLot
	})
	.then(res => res.json())
	.then(data => {
		
		if (data.ok) {

			$('#modal-lots').modal('hide')

			Swal.fire({
			  	position: 'center',
			  	type: 'success',
			  	title: 'Registro actualizado',
			  	showConfirmButton: false,
			  	timer: 2000
			})

            setTimeout(() => {
            	location.reload(true)
            }, 500)
		}

	})
	.catch(err => {
		Swal.fire({
		  	position: 'center',
		  	type: 'error',
		  	title: 'Ups, algo salio mal, intentalo de nuevo',
		  	showConfirmButton: false,
		  	timer: 3000
		})
		document.getElementById("loading").classList.add('d-none')
		document.getElementById("btn-options").classList.remove('d-none')
	})

}