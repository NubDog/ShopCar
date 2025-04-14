<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'vehicle_line' => 'required',
            'number_seats' => 'required|integer',
            'nedc' => 'required|integer',
            'selling_price' => 'required|integer',
            'img' => 'required'
        ]);

        Car::create($request->all());

        return redirect()->route('admin.cars.index')
            ->with('success', 'Xe đã được thêm thành công.');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'car_name' => 'required',
            'vehicle_line' => 'required',
            'number_seats' => 'required|integer',
            'nedc' => 'required|integer',
            'selling_price' => 'required|integer',
            'img' => 'required'
        ]);

        $car->update($request->all());

        return redirect()->route('admin.cars.index')
            ->with('success', 'Thông tin xe đã được cập nhật thành công');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('admin.cars.index')
            ->with('success', 'Xe đã được xóa thành công');
    }
}
