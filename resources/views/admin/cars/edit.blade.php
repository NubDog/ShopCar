<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin xe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Sửa thông tin xe</h1>
                    <div>
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="car_name" class="form-label">Tên xe</label>
                                <input type="text" class="form-control" id="car_name" name="car_name" value="{{ old('car_name', $car->car_name) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="vehicle_line" class="form-label">Dòng xe</label>
                                <input type="text" class="form-control" id="vehicle_line" name="vehicle_line" value="{{ old('vehicle_line', $car->vehicle_line) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="number_seats" class="form-label">Số ghế</label>
                                <input type="number" class="form-control" id="number_seats" name="number_seats" value="{{ old('number_seats', $car->number_seats) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="nedc" class="form-label">NEDC (km)</label>
                                <input type="number" class="form-control" id="nedc" name="nedc" value="{{ old('nedc', $car->nedc) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="selling_price" class="form-label">Giá bán</label>
                                <input type="number" class="form-control" id="selling_price" name="selling_price" value="{{ old('selling_price', $car->selling_price) }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="img" class="form-label">URL Hình ảnh</label>
                                <input type="text" class="form-control" id="img" name="img" value="{{ old('img', $car->img) }}" required>
                                <small class="form-text text-muted">Nhập URL của hình ảnh</small>
                                
                                @if ($car->img)
                                    <div class="mt-2">
                                        <label>Hình ảnh hiện tại:</label>
                                        <div>
                                            <img src="{{ $car->img }}" alt="{{ $car->car_name }}" style="max-height: 100px; max-width: 200px;">
                                        </div>
                                    </div>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
