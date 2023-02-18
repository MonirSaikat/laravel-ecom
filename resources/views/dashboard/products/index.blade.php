<x-dashboard title="Products">
    <x-page-header>
        Products
    </x-page-header>

    <table class="table table-bordered" id="products-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

    @push('scripts')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(function() {
                $('#products-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('dashboard.products.index') !!}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'cost',
                            name: 'cost'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'brand',
                            name: 'brand'
                        }, {
                            data: 'category',
                            name: 'category'
                        }, {
                            data: 'quantity',
                            name: 'quantity'
                        }, {
                            data: 'id',
                            name: 'actions',
                            render: function(data, type, full, meta) {
                                return `
                                    <a href="{{ url('/dashboard/products/${data}/edit') }}" class="btn btn-xs btn-primary">
                                        Edit
                                    </a>
                                    <form action="{{ url('/dashboard/products/${data}') }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                `;
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush



</x-dashboard>
