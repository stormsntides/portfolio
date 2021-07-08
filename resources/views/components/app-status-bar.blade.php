@if (session()->has('appStatus'))
    @php
        $status = session('appStatus');
        $alertType = ["success" => "success", "fail" => "danger"][$status["status"]];
        $iconName = ["success" => "check", "fail" => "exclamation"][$status["status"]];
    @endphp
    <div class="alert alert-{{ $alertType }} alert-dismissible fade show mt-5" role="alert">
        <h4>
            <i class="bi-{{ $iconName }}-circle-fill"></i> {{ strtoupper($status["status"]) }}
        </h4>
        <p>{{ $status["message"] }}</p>
        <button type="button" class="btn-close align-middle" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif