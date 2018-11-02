<footer class="card">
    
    <div class="row">
        <div class="col">
            <h3>Important Links</h3>
            <hr>
            <nav class="d-flex flex-column">
                <a href="/browse?type=notice">Notices</a>
                <a href="/browse?type=notification">Notifications</a>
                <a href="/support">Support</a>
                <a href="/faqs">FAQ's</a>
            </nav>
        </div>
        <div class="col">
            <h3>Department</h3>
            <hr>
            <nav class="d-flex flex-column">
                @foreach(Dept::all() as $dept)
                    <a href="browse?dept={{ $dept->name }}">{{ $dept->name }}</a>
                @endforeach
            </nav>
        </div>
        <div class="col">
            <h3>Follow Us</h3>
            <hr>
            <nav class="d-flex text-justify">
                <a class="px-1 text-white nav-link" href="#"><span class="fab fa-3x fa-facebook"></span></a>
                <a class="px-1 text-white nav-link" href="#"><span class="fab fa-3x fa-google-plus-square"></span></a>
                <a class="px-1 text-white nav-link" href="#"><span class="fab fa-3x fa-github-square"></span></a>
            </nav>
        </div>
    </div>
    <hr>
    <p>Developed By : Mohammad Waqar</p>
    <p>Contact : <a href="mailto:waqarqadri6@gmail.com">waqarqadri6@gmail.com</a></p>
    <hr>
    <p>&copy; {{ date("Y") }} All rights reserved. Our <a href="#">terms</a> and <a href="#">policy</a></p>
    <toTop class="fas" id="toTop"></toTop>
</footer>