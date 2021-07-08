@extends('layouts.main')

@section('content')
    <h1 class="my-4">Users</h1>
    @if ($users->isNotEmpty())
        @foreach ($users as $user)
            @php
                $isOwner = $user->role === "owner";
            @endphp
            <div class="card my-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <div class="text-muted">{{ date_format(date_create($user->created_at), 'l, F jS, Y') }}</div>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
                    <p class="card-text @if ($isOwner) text-primary @endif">
                        @if ($isOwner)
                            {{ strtoupper($user->role) }}
                        @else
                            {{ $user->role }}
                        @endif
                    </p>
                    @if (!$isOwner)
                        <div class="d-flex flex-column">
                            <button class="btn btn-outline-danger align-self-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $user->id }}" aria-expanded="false" aria-controls="collapse-{{ $user->id }}">
                                Delete
                            </button>
                            <div id="collapse-{{ $user->id }}" class="collapse">
                                <div class="alert alert-danger my-3" role="alert">
                                    <h4 class="alert-heading">
                                        <i class="bi-exclamation-octagon-fill"></i> WARNING!
                                    </h4>
                                    <h5>You are about to delete this user.</h5>
                                    <p>
                                        This action <strong>CANNOT</strong> be undone. If you wish to continue, click "Confirm" to delete this user. Otherwise, click "Cancel" to remove these options.
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <form action="{{ route('delete.user', ['id' => $user->id]) }}" method="POST">
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Confirm</button>
                                        @csrf
                                    </form>
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $user->id }}" aria-expanded="false" aria-controls="collapse-{{ $user->id }}">Cancel</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Empty</h5>
                <p class="card-text">There are no users to view. And honestly, I'm impressed that you're even viewing this message right now.</p>
            </div>
        </div>
    @endif
@endsection