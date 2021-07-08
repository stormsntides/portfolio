<div class="card mb-3">
    <div class="card-body">
        <form action="{{ route('send.message') }}" method="POST">
            <div class="mb-3">
                <label for="form-name" class="form-label">Name</label>
                <input id="form-name" class="form-control" name="name" type="text" aria-describedby="name-help" maxlength="50" required>
                <div class="d-flex justify-content-between">
                    <div id="name-help" class="form-text">Let me know who you are.</div>
                    <div id="name-length-tracker" class="form-text"></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="form-email" class="form-label">Email address</label>
                <input id="form-email" class="form-control" name="email" type="email" aria-describedby="email-help" maxlength="100" required>
                <div class="d-flex justify-content-between">
                    <div id="email-help" class="form-text">Provide your email so I can respond. I don't share this with anyone.</div>
                    <div id="email-length-tracker" class="form-text"></div>
                </div>
            </div>
            <div class="mb-3">
                <label for="form-message" class="form-label">Message</label>
                <textarea id="form-message" class="form-control" name="message" maxlength="300" required></textarea>
                <div class="d-flex justify-content-between">
                    <div id="email-help" class="form-text">Tell me anything!</div>
                    <div id="message-length-tracker" class="form-text"></div>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
            @csrf
        </form>
    </div>
</div>