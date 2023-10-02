@if(isset($iduser))

@if($spts == "stepfour")
<h1>Step FOUR</h1>
<form method="post" action="{{ route('content.store') }}" class="mt-6 space-y-6">
    @csrf
    
        <div><x-text-input id="unid" class="block mt-1 w-full" type="hidden" name="unid" value="{{Auth::user()->id;}}" /></div>
        <div><x-text-input id="unsts" class="block mt-1 w-full" type="hidden" name="unsts" value="four" /></div>

       
            <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Finish') }}</x-primary-button>
            </div>
        
</form>
@elseif($spts == "stepfive")
<h1>Fully Submitted F3 Form</h1>
@endif
@else
    <h1>Must to Finish Step Three</h1>
@endif