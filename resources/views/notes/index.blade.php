@extends('layouts.app')

@section('title', 'Daftar Note')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2 style="font-size: 1.8rem; font-weight: 300; text-transform: uppercase; letter-spacing: 1px;">Daftar Note</h2>
    <a href="{{ route('notes.create') }}" class="btn">Tambah Note</a>
</div>

@if($notes->count() > 0)
    @foreach($notes as $note)
        <div class="note-item">
            <div class="note-title">{{ $note->title }}</div>
            <div class="note-content">{{ Str::limit($note->content, 200) }}</div>
            <div class="note-actions">
                <a href="{{ route('notes.show', $note) }}" class="btn btn-view">Lihat</a>
                <a href="{{ route('notes.edit', $note) }}" class="btn btn-edit">Edit</a>
                <form action="{{ route('notes.destroy', $note) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
@else
    <div class="empty-state">
        <h3>Belum ada note</h3>
        <p>Mulai dengan membuat note pertama Anda</p>
        <a href="{{ route('notes.create') }}" class="btn">Tambah Note Pertama</a>
    </div>
@endif
@endsection
