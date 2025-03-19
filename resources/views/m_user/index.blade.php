@extends('m_user/template')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary"><i class="fas fa-users"></i> CRUD User</h2>
            <a class="btn btn-success" href="{{ route('m_user.create') }}">
                <i class="fas fa-user-plus"></i> Tambah User
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <i class="fas fa-check-circle"></i> {{ $message }}
            </div>
        @endif

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Level</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($useri as $index => $m_user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <span class="badge bg-info">{{ $m_user->level_id }}</span>
                            </td>
                            <td>{{ $m_user->username }}</td>
                            <td>{{ $m_user->name }}</td>
                            <td>
                                <span class="text-muted">******</span>
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $m_user->user_id }}">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>

                                <!-- Modal Konfirmasi Hapus -->
                                <div class="modal fade" id="deleteModal{{ $m_user->user_id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus user <strong>{{ $m_user->name }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
