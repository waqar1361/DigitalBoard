<footer class="bg-dark">
    <section class="col-6">
        <p>Developed By : Waqar Mahmood</p>
        <p>Contact : <a href="mailto:waqarqadri6@gmail.com">WaqarQadri6@gmail.com</a></p>
    </section>
    <hr>
    <div class="row">
        <div class="col">
            <h3>Links</h3>
            <nav class="d-flex flex-column">
                <a href="/">Home</a>
                <a href="/browse?type=notice">Notices</a>
                <a href="/browse?type=notification">Notifications</a>
            </nav>
        </div>
        <div class="col">
            <h3>Department</h3>
            <nav class="d-flex flex-column">
                @foreach(Dept::all() as $dept)
                    <a href="browse?dept={{ $dept->name }}">{{ $dept->name }}</a>
                @endforeach
            </nav>
        </div>
        <div class="col">
            <h3>Follow Us</h3>
            <nav class="d-flex text-justify">
                <a class="px-1" href="#"><span class="fab fa-3x fa-facebook"></span></a>
                <a class="px-1" href="#"><span class="fab fa-3x fa-google-plus"></span></a>
                <a class="px-1" href="#"><span class="fab fa-3x fa-github"></span></a>
                <a class="px-1" href="#"><span class="fab fa-3x fa-skype"></span></a>
            </nav>
        </div>
    </div>
    <hr>
    <p>&copy; {{ date("Y") }} All rights reserved. Our <a href="#">terms</a> and <a href="#">policy</a></p>
</footer>