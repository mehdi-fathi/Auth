<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>

</head>

<body>
<div class="main">
    <h3>Enter your login credentials</h3>
    <form method="post" action="{{ route('auth.loginPost') }}">
        @csrf
        <label for="email">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            required
        />
        <label for="password">
            Password:
        </label>
        <input type="password"
               id="password"
               name="password"
               placeholder="Enter your Password" required>

        <div class="wrap">
            <button type="submit"
                    onclick="solve()">
                Submit
            </button>
        </div>
    </form>
    <p>Not registered?
        <a href="{{ route('auth.register') }}"
           style="text-decoration: none;">
            Create an account
        </a>
    </p>

    @if ($errors->any())
        <p class="text-center font-semibold text-danger my-3">
            @foreach ($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </p>
    @endif
</div>
</body>

</html>
