<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div class="container">
      Dear {{ $customer->name }},
      <p>Order Number {{$order->id}} has been dispatched</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores consectetur impedit pariatur quibusdam repellendus vel? Aliquam cumque deleniti dicta dolorem dolores ipsa ipsam, quo, sunt velit veritatis voluptas </p>
  </div>
</body>
</html>