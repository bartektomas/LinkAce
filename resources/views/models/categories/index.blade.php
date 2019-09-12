@extends('layouts.app')

@section('content')

    <header class="d-flex align-items-center">
        <h3 class="mb-0">
            @lang('category.categories')
        </h3>
        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary ml-auto"
            aria-label="@lang('category.add')">
            <i class="fas fa-plus mr-2"></i>
            @lang('linkace.add')
        </a>
    </header>

    <div class="card my-3">
        <div class="card-table">

            @if(!$categories->isEmpty())

                @include('models.categories.partials.table')

            @else

                <div class="alert alert-info m-3">
                    @lang('linkace.no_results_found', ['model' => trans('category.categories')])
                </div>

            @endif

        </div>
    </div>

    @if(!$categories->isEmpty())
        {!! $categories->links() !!}
    @endif

@endsection