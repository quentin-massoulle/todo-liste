<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('layout.connexion')}}<</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>{{__('layout.connexion')}}</h2>
        <form>
            <div class=inputDiv>
                <h4>{{__('login.email')}}</h4>
                <input type="text" placeholder="{{__('login.emailPlaceholder')}}"required>
            </div>
            
            <div class=inputDiv>
                <h4>{{__('login.mdp')}}</h4>
                <input type="password" placeholder="{{__('login.mdpPlaceholder')}}"required>
            </div>
            <button type="submit">{{__('layout.connexion')}}</button>
        </form>
        <a href="signUp" class="register-link">{{__('login.signUp')}}</a>
    </div>
</body>