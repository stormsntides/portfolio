@extends('layouts.main')

@section('content')
    <section id="top" class="my-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img class="img-fluid rounded-start" src="https://i.imgur.com/TsbxAWI.jpg" title="source: imgur.com" alt="Ernest Cates standing with arms folded."/>
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div class="card-body">
                        <h1 class="card-title text-center">Ernest Cates</h1>
                        <div class="text-center text-muted">Developer | Programmer | Designer | Creator</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-brace-section section-name="about">
        <p>I am a web developer living on the coast of North Carolina in the city of Wilmington. My experience spans across multiple programming languages that I've used to create websites and tools to help me in my professional life. These languages include: HTML, CSS, JavaScript, PHP, C#, Java, Python, SQL, and Rust. I stay up-to-date on new technologies, such as frameworks and package managers, and best practices to make sure I am ready for any coding demands.</p>
        <p>I am also a problem solver that is always looking for solutions to issues that significantly hinder quality of life. As an example, during my time as a customer service representative for an online retail company, our monthly customer data needed to be aggregated and printed for review. This process was done by hand which took anywhere from one to two hours to fully complete. Naturally, this time spent collecting and logging this data to print detracted from our normal operations. My solution was to create a program that would read in XML formatted customer data and reformat it into a human-readable table that was printer friendly. With the new program up and running, printer ready tables were created <em>less than 5 minutes later!</em></p>
        <p>Whether it is through web development or creating software tools, I am constantly coming up with ideas for features that will improve the projects I work on. Additionally, I am proficient at photo, video, and audio editing along with troubleshooting computer hardware. I enjoy diving into computer systems, learning new technologies, and creating amazing things.</p>
        <p>I would be happy to hear from you directly. If my skillset sounds like the perfect fit for a project you are working on, please don't hesitate to <a href="#contact">get in contact with me</a>! I enjoy applying myself to new challenges and would be grateful for the opportunity to help bring your project to life.</p>
    </x-brace-section>
    <x-brace-section section-name="projects">
        <div class="list-group list-group-flush mb-3">
            <x-new-tab-link href="https://codepen.io/stormsntides/pen/oNjWjLj" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Simple Table Script</h5>
                    <small class="text-muted">CodePen</small>
                </div>
                <p class="mb-1">Custom editor that transpiles simple syntax into full HTML tables.</p>
                <small class="text-muted">Created by Ernest Cates</small>
            </x-new-tab-link>
            <x-new-tab-link href="https://codepen.io/stormsntides/pen/JjYdKXP" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">JavaScript Calculator</h5>
                    <small class="text-muted">CodePen</small>
                </div>
                <p class="mb-1">Interactive calculator that processes simple mathematical calculations.</p>
                <small class="text-muted">Created by Ernest Cates</small>
            </x-new-tab-link>
            <x-new-tab-link href="https://codepen.io/stormsntides/pen/EoZGdK" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Quote Machine</h5>
                    <small class="text-muted">CodePen</small>
                </div>
                <p class="mb-1">Random quote generator that can be tweeted to your official twitter account.</p>
                <small class="text-muted">Created by Ernest Cates</small>
            </x-new-tab-link>
            <x-new-tab-link href="https://codepen.io/stormsntides/pen/orJPjd" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">SVG Drawings</h5>
                    <small class="text-muted">CodePen</small>
                </div>
                <p class="mb-1">Collection of SVG drawings where clicking on the drawing shows its SVG and CSS markup.</p>
                <small class="text-muted">Created by Ernest Cates</small>
            </x-new-tab-link>
            <x-new-tab-link href="https://stormsntides-fcc-projects.glitch.me/" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Microservices</h5>
                    <small class="text-muted">Glitch</small>
                </div>
                <p class="mb-1">Microservice endpoints that provide different functionalities.</p>
                <small class="text-muted">Created by Ernest Cates</small>
            </x-new-tab-link>
        </div>
    </x-brace-section>
    <x-brace-section section-name="contact">
        <p>If you would like to collaborate on a project or hire me for professional work then please send me a message using the contact form below. I will respond as soon as I am able to. Thank you!</p>
        <p><strong><em>Please do not send spam messages. I am happy to reply to serious inquiries.</em></strong></p>
        <x-message-form />
    </x-brace-section>
@endsection