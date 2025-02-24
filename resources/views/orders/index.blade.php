@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-5">Orders</h2>

        <table class="table text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td class="text-primary">{{ $order->name }}</td>
                        <td>${{ $order->total }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

