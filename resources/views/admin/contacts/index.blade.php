@extends('admin.main')
@section('content')

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
                    <th data-field="company">{{trans('main.Name')}}</th>
                    <th data-field="progress">{{trans('main.Email')}}</th>
                    <th data-field="progress">{{trans('main.Actions')}}</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.contacts.loop')
            </tbody>
        </table>
        {!! $rows->render() !!}
    </div>
</div>
@endsection