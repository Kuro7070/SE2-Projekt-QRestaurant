<div class="container">
    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('upload-success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile" accept=".pdf">
            <label class="custom-file-label" for="chooseFile">PDF Speisekarte auswählen</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Speisekarte hochladen
        </button>
    </form>
{{--    <object data="{{ asset('storage/uploads/1606768801_aufgaben1u2.pdf') }}" type="application/pdf" width="100%" height="800px">--}}
    <a href="{{ \App\Http\Controllers\FileUpload::getPDF() }}">DOWNLOAD</a>
{{--    </object>--}}
    {{ \App\Http\Controllers\FileUpload::getPDF() }}
</div>


<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    });

</script>
