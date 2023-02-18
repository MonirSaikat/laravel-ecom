<x-dashboard title="Edit product">
    <x-page-header>
        Edit product
    </x-page-header>

    <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <x-input name="name" label="Product Name" value="{{ $product->name }}"></x-input>
            </div>
            <div class="col-md-4">
                <x-input name="cost" label="Cost" type="number" value="{{ $product->cost }}"></x-input>
            </div>
            <div class="col-md-4">
                <x-input name="price" label="Price" type="number" value="{{ $product->price }}"></x-input>
            </div>
            <div class="col-md-4">
                <x-select name="category_id" label="Category" :options="$categories" />
            </div>
            <div class="col-md-4">
                <x-select name="brand_id" label="Brand" :options="$brands" />
            </div>
            <div class="col-12">
                <x-file-input name="image" label="Product Image"></x-file-input>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="details">Product Details</label>
                    <textarea id="details" name="description">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/gjl5f6htgjweked4hzr13fmwmkre05zy418d9ewhlfiw8yi8/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: '#details',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ]
            });
        </script>
    @endpush

</x-dashboard>