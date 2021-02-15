@if ($errors->any())
    <div class="alert alert-dark" role="alert">
        <div class="font-medium text-red-600">
            {{ __('Whoops! Something went wrong.') }}
        </div>
        <div>
            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session('success'))
<div class="alert alert-success">
    {{ session('success')}}
</div>
@endif
