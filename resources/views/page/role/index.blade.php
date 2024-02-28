@extends('layouts.app')
@section('content')
        <div class="py-12">
                <div class="max-w-7xl mx-auto">
                        {{ __('Manage Users') }}
                        <div class="my-5">
                                      <livewire:roles.table />
                        </div>
                </div>
        </div>
@endsection
