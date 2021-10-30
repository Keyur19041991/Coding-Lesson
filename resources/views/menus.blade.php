@extends('layouts.master')
@section('content')

    <div class="navigation">
        <ul>
            @foreach($parentMenus as $parentMenu)
                <li class="{{ $loop->last ? 'drop-left' : '' }}"><a href="">{{ $parentMenu->name }}</a>
                    @if($parentMenu->children->count() > 0)
                        @include('child_menus', ['children' => $parentMenu->children])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <div class="container mt-5">
        <div class="col-6 m-auto">
            <form action="{{ route('menus.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Create Menu
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Parent Menu <span class="text-danger">*</span></label>
                            <select name="parent_id" class="form-control">
                                <option value="" selected disabled>-- Select Parent Menu</option>
                                @foreach($allMenus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">
                            Save
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>

@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('.navigation').stellarNav({
                theme: 'dark',
                breakpoint: 960,
                position: 'left'
            });
        });
    </script>
@endpush
