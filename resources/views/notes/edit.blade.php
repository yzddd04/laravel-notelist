@extends('layouts.app')

@section('title', 'Edit Note')

@section('content')
<a href="{{ route('notes.index') }}" class="back-link">← Kembali ke Daftar Note</a>

<h2 style="font-size: 1.8rem; font-weight: 300; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 30px;">Edit Note</h2>

<form action="{{ route('notes.update', $note) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Judul Note</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan judul note" value="{{ old('title', $note->title) }}" required>
        @error('title')
            <div style="color: #000000; font-size: 12px; margin-top: 5px; text-transform: uppercase; letter-spacing: 1px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="content">Isi Note</label>
        <textarea id="content" name="content" class="form-control" placeholder="Masukkan isi note" rows="8" required>{{ old('content', $note->content) }}</textarea>
        @error('content')
            <div style="color: #000000; font-size: 12px; margin-top: 5px; text-transform: uppercase; letter-spacing: 1px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-actions">
        <button type="submit" class="btn">Perbarui Note</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Batal</a>
    </div>
</form>
@endsection
