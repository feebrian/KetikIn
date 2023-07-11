@extends('template.template')
@section('container')
    <section id="create-article">
        <div class="max-w-3xl mx-auto">
            <form action="/article" method="post">
                @csrf
                <div class="form-group">
                    <label for="title" class="font-serif text-4xl label">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title here"
                        class="input input-ghost input-lg w-full" />
                </div>
                <div class="form-group">
                    <label for="content" class="font-serif text-3xl label">Article</label>
                    <textarea name="content" id="content" class="tinymce-editor"></textarea>
                </div>
                <div class="flex justify-between my-2">
                    <div class="form-group">
                        <select class="select select-bordered w-full max-w-xs" name="category_id" id="category">
                            <option selected disabled>Pick category</option>
                            @foreach ($categories as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">publish</button>
                </div>
            </form>
        </div>
    </section>

    {{-- don't write code more than this line --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/vso3s4u6qe54ed65gl3i37639pzom0b72r8z0zm1zugrvdhs/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({

            selector: 'textarea.tinymce-editor',

            height: 500,

            menubar: false,

            plugins: [

                'advlist autolink lists link image charmap print preview anchor',

                'searchreplace visualblocks code fullscreen',

                'insertdatetime media table paste code help wordcount', 'image'

            ],

            toolbar: 'undo redo | formatselect | ' +

                'bold italic backcolor | alignleft aligncenter ' +

                'alignright alignjustify | bullist numlist outdent indent | ' +

                'removeformat | help',

            content_css: '//www.tiny.cloud/css/codepen.min.css'

        });
    </script>
@endsection
