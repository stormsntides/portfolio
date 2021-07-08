<footer class="bg-dark mt-auto py-3">
    <section class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h5 class="text-light">Briefly about Ernest Cates</h5>
                <p class="text-light">Ernest Cates is a developer based in North Carolina that designs websites and creates coding tools. He is proficient in multiple coding languages including: HTML, CSS, JavaScript, PHP, C#, Java, Python, SQL, and Rust.</p>
            </div>
            <div class="col-sm-12 col-lg-4 offset-lg-2">
                <h5 class="text-light">Reach out to Ernest Cates on:</h5>
                <ul>
                    <li>
                        <x-new-tab-link class="link-light" href="https://www.linkedin.com/in/ernest-cates-115505155/">
                            <i class="bi-linkedin"></i> LinkedIn
                        </x-new-tab-link>
                    </li>
                    <li>
                        <x-new-tab-link class="link-light" href="https://www.facebook.com/ernest.cates">
                            <i class="bi-facebook"></i> Facebook
                        </x-new-tab-link>
                    </li>
                    <li>
                        <x-new-tab-link class="link-light" href="https://twitter.com/stormsntides">
                            <i class="bi-twitter"></i> Twitter
                        </x-new-tab-link>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="container d-flex justify-content-between flex-wrap">
        <div class="text-light">&copy; @php echo date("Y"); @endphp Copyright - Ernest Cates</div>
        <div>
            <a class="link-light" href="{{ route('home') }}">Home</a>
            <span class="link-muted">|</span>
            <a class="link-light" href="{{ route('login') }}">Account</a>
        </div>
    </section>
</footer>