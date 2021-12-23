@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Create New Item</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts" class="mb-5" >
            @csrf
            <div class="mb-3">
                <label for="barang" class="form-label">Judul</label>
                <input type="text" class="form-control @error('barang') is-invalid @enderror"
                id="barang" name="barang" required value="{{ old('barang') }}">
                @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                id="slug" name="slug">
                @error('barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                @error('keterangan')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
                <trix-editor input="keterangan"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Post Item</button>
        </form>
    </div>

    <script>
        const barang = document.querySelector('#barang');
        const slug = document.querySelector('#slug');

        barang.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title=' + barang.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        })

        document.addEventListen('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
            const image = document/querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = funtion(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
