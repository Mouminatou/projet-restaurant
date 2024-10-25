@extend('base')
@section('content')

<h1>Admin Contact</h1>
<ul>
    
@foreach($contacts as $contact)
<li>
{{ $contact->id }}
{{ $contact->email }}
</li>
@endforeach
</ul>
@endsection