@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel panel-default">
                        @if (count($polls) > 0)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Polls
                                </div>

                                <div class="panel-body">
                                    <table class="table table-striped task-table">
                                        <thead>
                                        <th>Item Number</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        </thead>
                                        <tbody>
                                        @foreach ($polls as $poll)
                                            <tr>
                                                <td class="table-text"><div>{{ $poll->title }}</div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <a href="/polls/create">Create Poll</a>
            </div>
        </div>
    </div>
@endsection
