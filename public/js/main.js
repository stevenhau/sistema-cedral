//############################################################
//###############  FUNCTIONS FOR DESARROLLOS #################
//############################################################

let btnsEliminar = document.querySelectorAll(".btn-detele");

btnsEliminar.forEach((btnEliminar) => {
    console.log(btnEliminar.getAttribute("data-id"));
    btnEliminar.addEventListener("click", () => {
      Swal.fire({
        title: 'Estas Seguro?',
        text: "Esta acción no se puede revertir",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
          

          Swal.fire(
            'Eliminado!',
            'Este registro se elimino correctamente.',
            'success'
          )
        }
      })
    });
});