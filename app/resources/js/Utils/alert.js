import Swal from 'sweetalert2'

export default {
    // ao chamar, use await. ex.: await alert.confirm('Deseja excluir?');
    async confirm(message) {
        const result = await Swal.fire({
            title: 'Atenção',
            text: message,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Sim',
            cancelButtonText: 'Cancelar',
        });

        if (result.isConfirmed) {
            return true;
        }
        return false;
    },

    async error(message) {
        await Swal.fire({
            title: 'Erro!',
            text: message,
            icon: 'error',
            confirmButtonText: 'OK',
        });
    },

    async success(title,message = '') {
        await Swal.fire(title,message,'success');
    },

    async successTop(title,message = '', confirmButton = false) {
        await Swal.fire({
            title: title,
            text: message,
            icon: 'success',
            position: 'top-end',
            toast: true,
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: confirmButton
        });
    },

    async load(type = 'show', message = '') {
        if (message) {
            Swal.fire(message)
        }
        if (type === 'show') {
            await Swal.showLoading()
        }
        if (type === 'hide') {
            await Swal.close()
        }
    },

    async warning(title, message = ''){
        await Swal.fire(title,message,'warning');
    },
}
