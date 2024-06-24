<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact System</title>
</head>
<body>
    {{-- TODO LOGOUT --}}
    {{-- <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}


    {{-- TODO DELETE --}}
    {{-- <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this contact?')) { document.getElementById('delete-form').submit(); }">
        Delete Contact
    </a>
    
    <form id="delete-form" action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form> --}}


    @isset($successMessage)
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endisset
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>