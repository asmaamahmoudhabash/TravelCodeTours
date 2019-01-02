@extends('admin.main')
@section('content')
    <div class="card invoices-card">
        <div class="card-content">
            <div class="col s12 m7 l9">
                <div class="mailbox-view">
                    <div class="mailbox-view-header">
                        <div class="left">
                            <div class="left">
                            <span class="mailbox-title">{{ $m->first_name}}
                                {{ $m->last_name}}</span>
                                <span class="mailbox-author">{{ $m->email}}</span>

                            </div>
                        </div>
                    </div>
                    <div class="divider mailbox-divider"></div>
                    <div class="mailbox-text">
                        Phone Number :{{ $m->phone }}</br>

                        msg:
                        <p>{!!  $m->comment !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection