<!-- resources/views/contacts/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form method="POST" action="{{ route('contact.update', $contact->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name) }}" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="company">Company</label>
            <input type="text" id="company" name="company" value="{{ old('company', $contact->company) }}" required>
            @error('company')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
            @error('phone')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Update Contact</button>
    </form>
</body>
</html>
