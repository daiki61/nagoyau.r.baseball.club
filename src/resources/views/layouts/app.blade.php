<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="名大軟式野球部紹介webサイトです。中の人は部員です。" />
    <title>名古屋大学 軟式野球部紹介ページ</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon"
        href="https://mail.google.com/mail/u/0?ui=2&ik=587e6bac7a&attid=0.1&permmsgid=msg-a:r4826295690985705419&th=195cd827130d1da7&view=fimg&fur=ip&permmsgid=msg-a:r4826295690985705419&sz=s0-l75-ft&attbid=ANGjdJ-Vnhq6iDopv7_OO6JvQhlrMo9dAK5J0emiatbN--7wfQW3YoZKCkAYsRJpK4kYYPJqsUKtQT-30ZNDn-QZRBKCZVZ7_O3g27jK4IzEjyw1abR4mWGdhv1ku-Y&disp=emb&realattid=195cd8243ac76b9c7281&zw">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://mail.google.com/mail/u/0?ui=2&ik=587e6bac7a&attid=0.1&permmsgid=msg-a:r4826295690985705419&th=195cd827130d1da7&view=fimg&fur=ip&permmsgid=msg-a:r4826295690985705419&sz=s0-l75-ft&attbid=ANGjdJ-Vnhq6iDopv7_OO6JvQhlrMo9dAK5J0emiatbN--7wfQW3YoZKCkAYsRJpK4kYYPJqsUKtQT-30ZNDn-QZRBKCZVZ7_O3g27jK4IzEjyw1abR4mWGdhv1ku-Y&disp=emb&realattid=195cd8243ac76b9c7281&zw">

    @yield('css')
</head>

<body>
    <header class="header">
        <h2 class="header_ttl">名古屋大学 軟式野球部紹介ページ</h2>
        <nav class="header_nav">
            <ul class="header_nav_list">
                <li class="header_nav_item"><a href="/detail">部について</a></li>
                <li class="header_nav_item"><a href="/match">試合情報</a></li>
                <li class="header_nav_item"><a href="/event">イベント情報</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>