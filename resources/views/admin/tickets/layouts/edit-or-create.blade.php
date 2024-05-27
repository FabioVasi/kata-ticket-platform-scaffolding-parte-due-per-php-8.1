@extends('layouts.app')

@section('head-title')
    @yield('page-title')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crea un nuovo ticket') }}</div>

                <div class="card-body">

                    <form method="POST" action="@yield('form-action')">
                        @csrf
                        @yield('form-method')

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoria</label>

                            <div class="col-md-6">
                                <select id="category_id" class="form-control" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ old('category_id', $category->id) }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @yield('additional-form-elements')

                        <div class="form-group row">
                            <label for="operator_id" class="col-md-4 col-form-label text-md-right">Operatori</label>

                            <div class="col-md-6">
                                <select id="operator_id" class="form-control" name="operator_id" required>
                                    @foreach ($operators as $operator)
                                        <option value="{{ old('operator_id', $operator->id) }}" class="{{ $operator->isAvailable() ? 'operator-available' : 'operator-unavailable'  }}">{{ $operator->first_name }} {{ $operator->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="priority_id" class="col-md-4 col-form-label text-md-right">Priorita'</label>

                            <div class="col-md-6">
                                <select id="priority_id" class="form-control" name="priority_id" required>
                                    @foreach ($priorities as $priority)
                                        <option value="{{ old('priority_id', $priority->id) }}"  style="color: {{ $priority->color }}">{{ $priority->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Titolo del ticket</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $ticket->title) }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Descrizione</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" rows="5" required>{{ old('description', $ticket->description) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notes" class="col-md-4 col-form-label text-md-right">Note aggiuntive</label>

                            <div class="col-md-6">
                                <textarea id="notes" class="form-control" name="notes" rows="3">{{ old('notes', $ticket->notes) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @yield('page-title')
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
