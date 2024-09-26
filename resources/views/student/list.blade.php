@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('student.upload') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            @if (session('status'))
                                <div class="alert {{ session('alert-type') }}">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="uploadFile" class="form-label">Upload File</label>
                                <a class="btn btn-primary" href="{{ route('student.template') }}" role="button">Download Excel Template</a>
                            </div>
                            <div class="mb-3 mt-2">
                                <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="uploadFile">
                                @error('file')
                                    <div class="mt-1 alert alert-danger" id="file-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex gap-2 mt-2">
                                <button type="submit" class="btn btn-outline-primary w-100">Upload</button>
                                <button type="button" class="btn btn-outline-danger w-100">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-2">
                <form action="">
                    <div class="input-group p-3">
                        <input type="text" class="form-control" placeholder="Search Student" value="">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </form>

                <div class="card-body">
                    <p class="text-center text-muted">No student data available.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('uploadFile').addEventListener('change', function() {
        this.classList.remove('is-invalid');
        this.classList.add('no-error');
        document.getElementById('file-error').style.display = 'none';
    });
</script>
@endsection


