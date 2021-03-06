@extends('admin.main')
@section('content')
 <div class="fixed-action-btn">
    <a class="btn-floating btn-large red"  href="{{ url('controll/sliders/create')}}">
        <i class="large material-icons" >add</i>
    </a>
</div>
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value"  value="{{request()->input('value')}}" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}
        </div>
        <span class="card-title">Pages</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    {{--<th data-field="company">{{trans('main.Title')}}</th>--}}
                    {{--<th data-field="progress">{{trans('main.Image')}}</th>--}}
                    <th data-field="company">Image</th>
                    <th data-field="company">Image Alt</th>
                    <th data-field="company">Status</th>
                    <th data-field="progress">Actions</th>

                </tr>
            </thead>
            <tbody class="data">
                @include('admin.sliders.loop')
            </tbody>
        </table>
        {!! $rows->render() !!}
    </div>
</div>
@endsection