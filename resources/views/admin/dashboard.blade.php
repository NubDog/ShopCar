<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Admin Dashboard</h1>
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-primary">Quản lý xe</a>
                </div>
                <hr>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Chào mừng đến với trang quản trị</h5>
                        <p class="card-text">Sử dụng menu trên để điều hướng đến các chức năng quản lý.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
