@extends('admin.style')

@section('content')
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10"> Add New Categories</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">


                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="card-body custom-card-action p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="border-b">
                                <th scope="row">Category</th>
                                <th  scope="row">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            {{ $category->categories }}
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex align-items-center gap-3">
                                            <form action="{{ url('/admin/categories/' . $category->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <script>
        document.getElementById('categoryForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var newCategory = document.getElementById('newCategory').value;

            // Save the new category to your database
            // After saving, redirect back to the original page
            // Assuming you have an endpoint to save the category and then redirect:
            fetch('{{ url('save_category_endpoint') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF token is included for Laravel
                },
                body: JSON.stringify({
                    category: newCategory
                })
            }).then(response => {
                if (response.ok) {
                    window.location.href = '{{ url('original_page.html') }}';
                } else {
                    alert('Failed to save category');
                }
            });
        });
    </script>
@endsection
