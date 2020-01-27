<footer>
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center">
                <a class="" href="{!! config('website.contact.github') !!}"><span class="icon-github"></span></a>
            </div>
            <div class="col-md d-flex justify-content-center">
                <a class="" href="{!! config('website.contact.linkedin') !!}"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-md d-flex justify-content-center">
                <p class="mt-2"><small>created by </small>Steve Temple</p>
            </div>
        </div>
    </div>
    <div class="footer-footer text-center">
        <small>Copyright &copy; {!! Carbon\Carbon::now()->year !!}, JestHub All Rights Reserved</small>
    </div>
</footer>
