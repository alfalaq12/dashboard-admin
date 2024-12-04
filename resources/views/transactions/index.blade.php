@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Dashboard Kas Kelas</h1>

    <!-- Total Pemasukan, Pengeluaran, dan Saldo -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Pemasukan</div>
                <div class="card-body">
                    <h5 class="card-title">Rp. {{ number_format($totalIncome, 2, ',', '.') }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Total Pengeluaran</div>
                <div class="card-body">
                    <h5 class="card-title">Rp. {{ number_format($totalExpense, 2, ',', '.') }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Saldo</div>
                <div class="card-body">
                    <h5 class="card-title">Rp. {{ number_format($balance, 2, ',', '.') }}</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Transaksi -->
    <div class="card">
        <div class="card-header">
            <a href="/transactions/create" class="btn btn-primary btn-sm">Tambah Transaksi</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ ucfirst($transaction->type) }}</td>
                        <td>Rp. {{ number_format($transaction->amount, 2, ',', '.') }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection