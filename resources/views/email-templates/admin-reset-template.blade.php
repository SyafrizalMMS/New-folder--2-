<p>Dear {{ $admin->name }}</p>
<br>
<p>
  Your password on Elaravel system was change successfuly
  Here is your new login credentials:
  <br>
  <b>Login ID:</b>{{ $admin->username }} or {{ $admin->email }}
  <br>
  <b>Password: </b>{{ $new_password }}
</p>
<br>
Please, keep your credential confidential. Your username and password are your own credentials and you should never share then with anybody else.
<p>
  Elaravel will not be liable for any misuse of your username and password.
</p>
<br>
--------------------------------------------------------------------------
<p>
  This email was automaticaly sent by Elaravel system. Do not reply it.
</p>