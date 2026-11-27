<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TecnoTienda') · TecnoTienda</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif;color:#172033;background:#f3f6fb;font-synthesis:none}
        *{box-sizing:border-box}body{margin:0}.topbar{background:#101a2d;color:#fff;padding:18px 5vw;display:flex;justify-content:space-between;align-items:center}.brand{font-size:1.15rem;font-weight:750;letter-spacing:.02em}.brand span{color:#5ee0b5}.topbar a{color:#d8e1ef;text-decoration:none;font-size:.94rem}.container{max-width:1080px;margin:42px auto;padding:0 22px}.heading{display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:24px}.heading h1{margin:0;font-size:1.8rem}.muted{color:#68758a}.card{background:#fff;border:1px solid #e4e9f1;border-radius:14px;padding:24px;box-shadow:0 8px 28px #1720330a}.table-wrap{overflow:auto}table{width:100%;border-collapse:collapse}th,td{text-align:left;padding:15px 13px;border-bottom:1px solid #edf0f5;white-space:nowrap}th{font-size:.8rem;text-transform:uppercase;letter-spacing:.06em;color:#68758a}tbody tr:last-child td{border-bottom:0}.button{display:inline-flex;align-items:center;justify-content:center;padding:10px 15px;border-radius:9px;border:0;text-decoration:none;font-weight:650;cursor:pointer;font:inherit;font-size:.92rem}.primary{background:#087f68;color:white}.secondary{background:#edf2f7;color:#263449}.danger{background:#fff0ef;color:#b42318}.actions{display:flex;gap:8px;align-items:center}.inline{display:inline}.field{margin-bottom:19px}.field label{display:block;font-weight:650;margin-bottom:7px}.field input{width:100%;padding:12px;border:1px solid #cdd5e1;border-radius:8px;font:inherit}.field input:focus{outline:3px solid #087f6826;border-color:#087f68}.error{color:#b42318;font-size:.9rem;margin-top:6px}.alert{padding:13px 16px;border-radius:9px;margin-bottom:18px;background:#e9f8f1;color:#146c43}.empty{text-align:center;padding:42px 15px;color:#68758a}.details{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:20px}.details dt{font-size:.82rem;color:#68758a;margin-bottom:5px}.details dd{margin:0;font-weight:650;font-size:1.08rem}@media(max-width:650px){.container{margin:26px auto}.heading{align-items:flex-start;flex-direction:column}.card{padding:16px}.topbar{padding:16px 22px}}
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('productos.index') }}">Tecno<span>Tienda</span></a>
        <a href="{{ route('productos.index') }}">Productos</a>
    </header>
    <main class="container">
        @if (session('success'))
            <div class="alert" role="status">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
</body>
</html>
