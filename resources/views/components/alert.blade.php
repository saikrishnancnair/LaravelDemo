<div>
    @if(session('message'))
    <div class="py-4 px-2 bg-green-400">{{session('message')}}</div>
    <!-- @elseif(session('error'))
     <div class='py-4 px-2 bg-red-400'>{{session('error')}}</div> -->
    @endif

    @if ($errors->any())
    <div class="py-4 px-2 bg-red-400">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>