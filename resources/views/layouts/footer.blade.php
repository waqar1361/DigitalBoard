<footer class="card" id="test">
    
    <div class="row">
        
        <div class="col-3">
            <h3>Follow Us</h3>
            <hr>
            <nav class="d-flex text-justify">
                <a class="py-0 px-1 brand rounded facebook nav-link" href="#"><span class="fab fa-3x fa-facebook"></span></a>
                <a class="py-0 px-1 brand rounded plus nav-link" href="#"><span class="fab fa-3x fa-google-plus-square"></span></a>
                <a class="py-0 px-1 brand rounded github nav-link" href="#"><span class="fab fa-3x fa-github-square"></span></a>
            </nav>
            <hr>
            <p>Developed By :<br> Mohammad Waqar</p>
            <p>Contact :<br> <a href="mailto:waqarqadri6@gmail.com">waqarqadri6@gmail.com</a></p>
        </div>
        
        <div class="col-3">
            <h3>Important Links</h3>
            <hr>
            <nav class="d-flex flex-column">
                <a href="/browse?type=notice">Notices</a>
                <a href="/browse?type=notification">Notifications</a>
                <a href="/support">Support</a>
                <a href="/faqs">FAQ's</a>
            </nav>
            <hr>
            
            <b>Theme : </b>
            
            <div class="btn-group" role="group" aria-label="themes">
                <button id="light" type="button" @click="light" class="btn btn-light {{ $_COOKIE['theme'] == 'light' ?
                "disabled" : "" }}" >Light</button>
                <button id="dark" type="button" @click="dark" class="btn btn-dark {{ $_COOKIE['theme'] == 'dark' ?
                "disabled" : "" }}">Dark</button>
            </div>
        </div>
        
    
        <div class="col-3 ml-auto">
            <h3>Departments</h3>
            <hr>
            <nav class="d-flex flex-column text-capitalize">
                @foreach(Dept::all() as $dept)
                    <a href="browse?dept={{ $dept->name }}" data-toggle="tooltip" data-placement="left"
                       title="{{ $dept->full_name or $dept->name }}">{{$dept->name}}</a>
                @endforeach
            </nav>
        </div>
    </div>
    <hr>
    <p>&copy; {{ date("Y") }} All rights reserved. Our <a href="#">terms</a> and <a href="#">policy</a></p>
    <a id="toTop" class="fa" style="display: none"></a>
</footer>