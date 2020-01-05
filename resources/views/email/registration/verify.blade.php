<h5>dear {{$user->username}}</h5>

<p>please click <a href="{{ url('/verify?code='.$code)}}">here</a> to verify your account</p>