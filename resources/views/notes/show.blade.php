@extends('layouts.app')

@section('title', 'Detail Note')

@section('content')
<a href="{{ route('notes.index') }}" class="back-link">← Kembali ke Daftar Note</a>

<div class="note-item" style="margin-top: 20px;">
    <div class="note-title">{{ $note->title }}</div>
    <div class="note-content" style="white-space: pre-wrap;">{{ $note->content }}</div>
    <div style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #000000; color: #666666; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">
        Dibuat: {{ $note->created_at->format('d M Y, H:i') }}
        @if($note->updated_at != $note->created_at)
            | Diperbarui: {{ $note->updated_at->format('d M Y, H:i') }}
        @endif
    </div>
</div>

@endsection
