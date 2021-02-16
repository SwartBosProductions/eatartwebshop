test 1 vanuit build-views

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>




                                <div class="btn p-2 m-1 btn-inlog-register">
                                    <a href="{{ route('logout') }}" class="eatart-a1 mx-2"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Uitloggen
                                    </a>
                                </div>
