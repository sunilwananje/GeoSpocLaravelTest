<html>
   <head>
    <title>Profile</title>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
   
        <div class="container">
        @foreach($users as $k => $user)
            <div class="row" style="margin-bottom=20px">
            
                <div class="col-md-9">
                    <table class="table table-bordered table-striped">
                        <thead style="background-color:#8a9da0">
                            <tr>
                                <th colspan="2">Profile {{ ($k+1) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>E-Mail Address</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>Web Address</th>
                                <td>{{ $user->web_address }}</td>
                            </tr>
                            <tr>
                                <th>Cover Letter</th>
                                <td>{{ $user->cover_letter }}</td>
                            </tr>
                            <tr>
                                <th>Attachment</th>
                                <td>{{ $user->attachment }}</td>
                            </tr>
                            <tr>
                                <th>Do you like working</th>
                                <td>{{ (($user->is_working == 1)? 'Yes': 'No') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>
            @endforeach
        </div>
        
   </body>
</html>