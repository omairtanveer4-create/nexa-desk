{{-- File Upload: drag & drop zone powered by Dropzone. --}}
<form class="dropzone" id="demo-dropzone" action="#" style="min-height: 180px;">
    <div class="fallback">
        <input type="file" name="file" multiple>
    </div>
</form>

<p class="text-muted small mt-2">
    Drag files here or click to browse. Uploads are disabled in this demo
    (<code>autoProcessQueue: false</code>) — point <code>action</code> at your own
    Laravel upload endpoint to make it live.
</p>

@push('js')
    <script>
        new window.Dropzone('#demo-dropzone', {
            url: '/ui-kit/file-upload-demo',
            autoProcessQueue: false,
            maxFilesize: 5,
            acceptedFiles: 'image/*,application/pdf',
            addRemoveLinks: true,
            dictDefaultMessage: 'Drop files here or click to browse',
        });
    </script>
@endpush