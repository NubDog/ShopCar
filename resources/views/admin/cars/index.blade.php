<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý xe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Quản lý xe</h1>
                    <div>
                        <a href="{{ url('/admin') }}" class="btn btn-secondary me-2">Dashboard</a>
                        <a href="{{ route('admin.cars.create') }}" class="btn btn-success">Thêm xe mới</a>
                    </div>
                </div>
                
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên xe</th>
                                        <th>Dòng xe</th>
                                        <th>Số ghế</th>
                                        <th>NEDC</th>
                                        <th>Giá bán</th>
                                        <th>Hình ảnh</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cars as $car)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $car->car_name }}</td>
                                            <td>{{ $car->vehicle_line }}</td>
                                            <td>{{ $car->number_seats }}</td>
                                            <td>{{ $car->nedc }}</td>
                                            <td>{{ number_format($car->selling_price) }} VNĐ</td>
                                            <td>
                                                @if ($car->img)
                                                    <img src="{{ $car->img }}" alt="{{ $car->car_name }}" style="max-height: 50px; max-width: 100px;">
                                                @else
                                                    Không có hình ảnh
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-sm btn-primary me-2">Sửa</a>
                                                    <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa xe này?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Không có dữ liệu</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
