@extends('admin.layouts.master')

@section('content')
    <form method="post" action="{{ route('admin:group:update', $group->id) }}">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Név</label>
            <p class="control">
                <input class="input" type="text" name="name" value="{{ $group->name }}">
            </p>
        </div>
        <div class="field is-grouped">
            <p class="control">
                <button class="button is-primary">Hozzáadás</button>
            </p>
        </div>
    </form>
@endsection