@extends('layouts.main')

@section('content')
    <h1 class="my-4">Messages</h1>
    @if ($messages->isNotEmpty())
        @foreach ($messages as $msg)
            <div class="card my-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $msg->name }}</h5>
                        <div class="text-muted">{{ date_format(date_create($msg->sent), 'l, F jS, Y') }}</div>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $msg->email }}</h6>
                    <p class="card-text">{{ $msg->message }}</p>
                    <div class="d-flex flex-column">
                        <button class="btn btn-outline-danger align-self-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $msg->id }}" aria-expanded="false" aria-controls="collapse-{{ $msg->id }}">
                            Delete
                        </button>
                        <div id="collapse-{{ $msg->id }}" class="collapse">
                            <div class="alert alert-danger my-3" role="alert">
                                <h4 class="alert-heading">
                                    <i class="bi-exclamation-octagon-fill"></i> WARNING!
                                </h4>
                                <h5>You are about to delete this message.</h5>
                                <p>
                                    This action <strong>CANNOT</strong> be undone. If you wish to continue, click "Confirm" to delete this message. Otherwise, click "Cancel" to remove these options.
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('delete.message', ['id' => $msg->id]) }}" method="POST">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Confirm</button>
                                    @csrf
                                </form>
                                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $msg->id }}" aria-expanded="false" aria-controls="collapse-{{ $msg->id }}">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Empty</h5>
                <p class="card-text">There are no messages to view.</p>
            </div>
        </div>
    @endif
@endsection