<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('auth.register') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value={{old('name')}}>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value={{old('email')}}>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" value={{old('password')}}>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>