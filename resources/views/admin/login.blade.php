<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        :root {
            --bg: #0f1720;
            --panel: #17212c;
            --panel-soft: #1d2b36;
            --gold: #d4a94d;
            --gold-soft: rgba(212,169,77,0.15);
            --text: #f7f3eb;
            --muted: rgba(247,243,235,0.72);
            --danger: #ef5350;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0b1117, #14242d 55%, #101c24);
            color: var(--text);
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
        .card {
            width: min(100%, 480px);
            background: rgba(23,33,44,0.92);
            border: 1px solid rgba(212,169,77,0.3);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 20px 50px rgba(0,0,0,0.35);
        }
        h1 {
            margin: 0 0 0.5rem;
            font-size: 2rem;
            color: var(--gold);
        }
        p {
            margin: 0 0 1.5rem;
            color: var(--muted);
        }
        label {
            display: block;
            margin-bottom: 0.45rem;
            font-weight: 600;
            color: var(--text);
        }
        input {
            width: 100%;
            padding: 0.9rem 1rem;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.03);
            color: var(--text);
            margin-bottom: 1rem;
        }
        input:focus {
            outline: 2px solid rgba(212,169,77,0.8);
            border-color: var(--gold);
        }
        button {
            width: 100%;
            border: none;
            border-radius: 8px;
            padding: 0.95rem 1rem;
            background: var(--gold);
            color: #111;
            font-weight: 700;
            cursor: pointer;
        }
        .error {
            background: rgba(239,83,80,0.1);
            border: 1px solid rgba(239,83,80,0.4);
            color: #ffd7d6;
            padding: 0.8rem 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Admin Login</h1>
        <p>Access submitted project proposals.</p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
