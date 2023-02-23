var editingUser = false
var user_id = null

const openModalUser = () => {
	editingUser = false
	document.getElementById("form-users").reset()
	document.getElementById("input-text-password").classList.remove('d-none')
	document.getElementById("input-check-password").classList.add('d-none')
	$('#password').attr("required","")
	$('#modal-users').modal('show')
}

const submitForm = (event) =>  {
	event.preventDefault()

	const formUser = document.getElementById('form-users')
	const dataUser = new FormData(formUser)

	if (!editingUser) {
		createUser(dataUser)
	} else {
		updateUser(dataUser)
	}
}
	
const editUser = (id) => {

	editingUser = true
	document.getElementById("input-check-password").classList.remove('d-none')
	document.getElementById("input-text-password").classList.add('d-none')
	$("#password").removeAttr("required")

	fetch(`${url}/users/edit.php?id=${id}`)
	.then(res => res.json())
	.then(data => {

		const { 
			id, 
			name, 
			email, 
			rol
		} = data.user

		user_id = id

		$('#name').val(name)
		$('#email').val(email)
		$('#rol').val(rol)

		$('#modal-users').modal('show')
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

const createUser = (data) => {

	fetch(`${url}/users/create.php`, {
		method: 'POST',
		body: data
	})
	.then(res => res.json())
	.then(data => {
		
		if (data.ok) {

			$('#modal-users').modal('hide')

			Swal.fire({
			  	position: 'center',
			  	type: 'success',
			  	title: 'Registro creado',
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

const updateUser = (data) => {

	fetch(`${url}/users/update.php?id=${user_id}`, {
		method: 'POST',
		body: data
	})
	.then(res => res.json())
	.then(data => {
		
		if (data.ok) {

			$('#modal-users').modal('hide')

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

const deleteUser = (id) => {

	Swal.fire({
	  	title: '¿Quieres eliminar este registro?',
	  	showDenyButton: true,
	  	showCancelButton: true,
	  	confirmButtonText: 'Aceptar',
	  	denyButtonText: `Cancelar`,
	}).then((result) => {
	  	if (result.value) {

	  		fetch(`${url}/users/delete.php?id=${id}`)
	  		.then(res => res.json())
	  		.then(data => {

	  			if (data.ok) {
	  				Swal.fire({
					  	position: 'center',
					  	type: 'success',
					  	title: 'Registro eliminado',
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
			})
	  	}
	})

}

const changePassword = (event) => {

	const checked = event.target.checked

	if (checked) {
		document.getElementById("input-text-password").classList.remove('d-none')
		$('#password').attr("required","")
	} else {
		document.getElementById("input-text-password").classList.add('d-none')
		$("#password").removeAttr("required")
	}
}