Click here to reset your password: <a href="{{ $link = url('passwords/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
