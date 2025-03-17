@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')

@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kagegori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Kategori</h3>
                <a href="{{ route('kategori.create') }}" class="btn btn-primary float-right">+ Add Kategori</a>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush