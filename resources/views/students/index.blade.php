@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col">
            <button type="button" id="btn-create" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Siswa
            </button>
        </div>
        <div class="col-12">
            @if (session()->has('success'))
            <div class="alert alert-success d-flex align-items-center justify-content-between mb-0 mt-3" role="alert">
                <div class="d-flex">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        {{ session()->get('success') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <table class="table table-bordered my-3">
        <thead>
            <tr>
                <th>no</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Keterangan</th>
                <th width="140px">Action</th>
            </tr>
        </thead>    
        <tbody>
            @forelse ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->rombel }}</td>
                <td>{{ $student->rayon }}</td>
                <td>{{ $student->ket }}</td>
                <td class="d-flex">
                    <button type="button" id="btn-edit" class="btn btn-success px-2 py-0 mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal" value="{{ $student->id }}">
                        edit
                    </button>
                    
                    <form action="student/{{ $student->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-2 py-0 mx-1" onclick="confirm('yakin mau hapus? nama nyesel lho')">Delete</button>
                    </form>

                </td>
            </tr>    
            @empty
            <div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  Tidak ada siswa
                </div>
              </div>
            @endforelse
        </tbody>
    </table>

</div>


  
  <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student.store') }}" method="post" id="form">
                        @csrf
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" placeholder="1190****">
                            @error('nis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="ahmed">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="rombel" class="form-label">Rombel</label>
                            <input type="text" class="form-control @error('rombel') is-invalid @enderror" id="rombel" name="rombel" placeholder="RPL XI-2">
                            @error('rombel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="rayon" class="form-label">Rayon</label>
                            <input type="text" class="form-control @error('rayon') is-invalid @enderror" id="rayon" name="rayon" placeholder="Tajur1">
                            @error('rayon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control @error('ket') is-invalid @enderror" id="ket" name="ket" placeholder="keteranagan anda">
                            @error('ket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" id="btn-form">Tambah Siswa</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    <script>
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
    </script>
@endsection