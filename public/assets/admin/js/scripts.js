    const btnEdits = document.querySelectorAll('#btn-edit')
    const btnCreate = document.querySelector('#btn-create')
    const form = document.querySelector('#form')
    const inputNis = document.querySelector('#nis')
    const inputNama = document.querySelector('#nama')
    const inputRayon = document.querySelector('#rayon')
    const inputRombel = document.querySelector('#rombel')
    const inputKet = document.querySelector('#ket')
    const btn = document.querySelector('#btn-form')
    let method = document.createElement('input')
    let student

    // membuat method
    method.type = 'hidden'
    method.name = '_method'
    method.value = 'put'

    btnEdits.forEach(btnEdit => {
        btnEdit.addEventListener('click', function (){
            form.appendChild(method)
            btn.textContent = 'Ubah Data Siswa'
            fetch('/student/'+ this.value)
                .then(response => response.json())
                .then(data => [
                    inputNis.value = data.student.nis,
                    inputNama.value = data.student.nama,
                    inputRayon.value = data.student.rayon,
                    inputRombel.value = data.student.rombel,
                    inputKet.value = data.student.ket,
                    form.action = '/student/' + data.student.id,
                ])
        })
    });

    btnCreate.addEventListener('click', function (){
        inputNis.value = ''
        inputNama.value = ''
        inputRayon.value = ''
        inputRombel.value = ''
        inputKet.value = ''
        form.action = '/student/'
        form.removeChild(method)
        btn.textContent = 'Tambah Siswa'
    })