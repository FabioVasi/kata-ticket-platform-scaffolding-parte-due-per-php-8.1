@extends('layouts.app')

@section('head-title', 'Aggiorna stato del ticket')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Aggiorna stato del ticket') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.tickets.update', $ticket) }}">
                        @csrf
                        @method('PATCH')


                        <div class="form-group row">
                            <label for="status_id" class="col-md-4 col-form-label text-md-right">Stato</label>

                            <div class="col-md-6">
                                <select id="status_id" class="form-control" name="status_id" required>
                                    @foreach ($statuses as $status)
                                        <option value="{{ old('status_id', $status->id) }}" style="color: {{ $status->color }}"
                                            {{ $status->id == old('status_id', $ticket->status_id) ? 'selected' : '' }}>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0 pt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Aggiorna stato del ticket
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
