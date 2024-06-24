<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact System</title>
</head>
<body>
    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value={{old('name')}}>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="name">Company</label>
            <input type="text" id="company" name="company" value={{old('company')}}>
            @error('company')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value={{old('phone')}}>
            @error('phone')
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

        <button type="submit">Add Contact</button>
    </form>
</body>
</html>